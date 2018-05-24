<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('products', 'IndexController@index');
Route::get('products/{product}', 'IndexController@show');
Route::post('products', 'IndexController@store');
Route::put('products/{product}', 'IndexController@update');
Route::delete('products/{product}', 'IndexController@delete');