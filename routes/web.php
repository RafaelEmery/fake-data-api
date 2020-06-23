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

Route::get('/', function () {
    return view('welcome');
}); 

Route::group(['prefix' => 'product'], function () {
       
    Route::resource('/', 'ProductController');

    Route::get('/{$name}', 'ProductController@showByName');

    Route::get('/active', 'ProductController@getByActive');
    Route::get('/cheap', 'ProductController@getByCheaper');
    Route::get('/expensive', 'ProductController@getByMoreExpensive');
});