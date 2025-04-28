<?php

use Illuminate\Support\Facades\Route;

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

//Users
Route::get('/', function () {
    return redirect()->to('customer');
});


Route::get('/customer',         			['middleware' => [], 'as' => 'home',       		'uses' => 'App\Http\Controllers\CustomerController@index']);
Route::get('customer/', 					['middleware' => [], 'as' => 'cliente.index', 	'uses' => 'App\Http\Controllers\CustomerController@index']);
Route::get('customer/load/', 				['middleware' => [], 'as' => 'cliente.load', 	'uses' => 'App\Http\Controllers\CustomerController@load']);
Route::get('customer/create', 				['middleware' => [], 'as' => 'cliente.create',	'uses' => 'App\Http\Controllers\CustomerController@create']);
Route::post('customer/store', 				['middleware' => [], 'as' => 'cliente.store', 	'uses' => 'App\Http\Controllers\CustomerController@store']);
Route::get('customer/edit/{cliente}',		['middleware' => [], 'as' => 'cliente.edit', 	'uses' => 'App\Http\Controllers\CustomerController@edit']);
Route::patch('customer/update/{cliente}',	['middleware' => [], 'as' => 'cliente.update', 	'uses' => 'App\Http\Controllers\CustomerController@update']);
Route::delete('customer/delete/{cliente}', 	['middleware' => [], 'as' => 'cliente.delete',  'uses' => 'App\Http\Controllers\CustomerController@destroy']);
Route::get('customer/show/{cliente}',      	['middleware' => [], 'as' => 'cliente.show',    'uses' => 'App\Http\Controllers\CustomerController@show']);