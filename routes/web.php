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

Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'ProductController@index');
    
    Route::get('/available', 'ProductController@getByAvailable'); 
    Route::get('/cheap', 'ProductController@getByCheaper'); 
    Route::get('/expensive', 'ProductController@getByMoreExpensive'); 
    Route::get('/sold', 'ProductController@getBySoldQuantity');

    Route::get('/{id}', 'ProductController@show');
});

//Index retornando todos os posts -> Ver se os Comments vem no json
//Show retornando o post por Id
//Index retornando todos os comentarios
//Show retornando o comentario por Id
//Comentarios de um post
//Comentarios por Id de um post por Id

Route::group(['prefix' => 'blog'], function () {
    
    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'PostController@index');
        
        Route::get('/{id}', 'PostController@show');
        Route::get('/{post_id}/comment', 'PostController@getCommentsByPost');
    });
    
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'CommentController@index');

        Route::get('/{id}', 'CommentController@show');
        Route::get('/{post_id}/post', 'CommentController@getPostByComment');
    });
});
