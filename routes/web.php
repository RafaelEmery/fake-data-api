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

Route::resource('/product', 'ProductController');

Route::group(['prefix' => 'product'], function () {
       
    Route::resource('/', 'ProductController');

    Route::get('/{name}', 'ProductController@showByName');
    Route::get('/available', 'ProductController@getByAvailable');
    Route::get('/cheap', 'ProductController@getByCheaper');
    Route::get('/expensive', 'ProductController@getByMoreExpensive');
});

Route::group(['prefix' => 'posts'], function () {
    
    Route::resource('/', 'PostController');
});