<?php

use App\Http\Controllers\TenantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'PageController@index') -> name("index");

Route::get('/docs', 'PageController@docs') -> name("docs");

Route::resource('/flats', 'FlatController');
Route::get('/flats/details/{flat}','FlatController@details') -> name("flats.details");
Route::post('/flats/book','FlatController@book') -> name("flats.book");
Route::post('/flats/reserve','FlatController@reserve') -> name("flats.reserve");
Route::post('/flats/tenant_update','FlatController@tenant_update') -> name("flats.tenant_update");

Route::get('tenant/next', 'TenantController@next') -> name('tenant.next');
Route::get('/tenant/previous', 'TenantController@previous') -> name('tenant.previous');
Route::resource('/tenant', 'TenantController');

Route::resource('/expense', 'ExpenseController');

Route::get('/electricity', 'ElectricityController@index') -> name("electricity");
Route::get('/electricity/create', 'ElectricityController@create') -> name("electricity.create");
Route::post('/electricity/show', 'ElectricityController@show') -> name("electricity.show");











Route::any('{all}', function(){
    return view('errors.404');
})->where('all', '.*');