<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('getToken', 'AuthController@generateToken')->name('getToken');
    
//names
Route::get('names', 'NameController@index');
Route::get('names/{name}', 'NameController@show');
Route::post('names', 'NameController@store');
Route::put('names/{name}', 'NameController@update');
Route::delete('names/{name}', 'NameController@delete');

//collections
Route::get('collections', 'CollectionController@index');
Route::get('collections/{collection}', 'CollectionController@show');
Route::post('collections', 'CollectionController@store');
Route::put('collections/{collection}', 'CollectionController@update');
Route::delete('collections/{collection}', 'CollectionController@delete');

