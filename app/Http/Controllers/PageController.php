<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("index", [
            'page_title' => 'Home',
            'active' => '',
            'heading' => 'Summary'
        ]);
    }

    public function docs(){
        return "Documents";
    }
}
