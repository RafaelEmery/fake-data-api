<?php

use Illuminate\Support\Facades\Route;
use App\Comment;
use App\Post;

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

Route::get('/deploy', function () {
    return 'Teste de rota no Heroku';
});

Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'ProductController@index');
    
    Route::get('/available', 'ProductController@getByAvailable'); 
    Route::get('/cheap', 'ProductController@getByCheaper'); 
    Route::get('/expensive', 'ProductController@getByMoreExpensive'); 
    Route::get('/sold', 'ProductController@getBySoldQuantity');

    Route::get('/{id}', 'ProductController@show');
});

Route::group(['prefix' => 'blog'], function () {
    
    //Must find a way to return a json with all the posts and comments
    //In a single GET request...
    //May be '/' on BlogController@allPostsComments

    Route::group(['prefix' => 'post'], function () {
        Route::get('/', 'PostController@index');
        
        Route::get('/{id}', 'PostController@show');
        Route::get('/{post_id}/comment', 'PostController@getCommentsByPost');
    });
    
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'CommentController@index');

        Route::get('/{id}', 'CommentController@show');
        Route::get('/{comment_id}/post', 'CommentController@getPostByComment');
    });
});
