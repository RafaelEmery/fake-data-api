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
    Route::get('/', 'ProductController@index');
    
    Route::get('/available', 'ProductController@getByAvailable'); 
    Route::get('/cheap', 'ProductController@getByCheaper'); 
    Route::get('/expensive', 'ProductController@getByMoreExpensive'); 
    Route::get('/sold', 'ProductController@getBySoldQuantity');

    Route::get('/{id}', 'ProductController@show');
});






Route::resource('/post', 'PostController'); 
