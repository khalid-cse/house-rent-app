<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flat;

class ElectricityController extends Controller
{
    public function index()
    {
        $flats = Flat::with(['bill:flat_id,unit_bill','electricity'=>function($query){
            $query->where('date',date("Y-m-d H:i:s",strtotime('first day of january 2019')));
        }])->get();

        // dd($flats[7]->bill->unit_bill);

        return view('electricity.index',[
            'page_title' => 'Electricity Bill',
            'active' => 'electricity',
            'heading' => 'Electricity Bill',
            'flats' => $flats,
        ]);
    }

    public function create(){
        $flats = Flat::all();

        return view('electricity.create',[
            'page_title' => 'Enter Electricity Bill',
            'active' => 'electricity',
            'heading' => 'Enter Electricity Bill',
            'flats' => $flats,
        ]);
    }

    public function show(Request $request){
        
    }
}
