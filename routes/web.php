<?php

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

Auth::routes();

// Route::get('/login','AuthController@login')->name('login');
// Route::post('/postlogin', 'AuthController@postlogin')->name('dashboard');
// Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index');
    
    // User
    Route::get('/user/{id}/edit','UsersController@edit');
    Route::post('/user/{id}/update','UsersController@update');
    Route::get('/user/{id}/delete','UsersController@delete');

    // Thread
    Route::get('/threads', 'ThreadsController@index');
    Route::get('/threads/{thread}', 'ThreadsController@show');
    Route::post('/threads', 'ThreadsController@store');
    Route::delete('/threads/{thread}', 'ThreadsController@destroy');
    Route::patch('/threads/{thread}', 'ThreadsController@update');

    // Reply
    Route::resource('replies','RepliesController',['only'=>['edit','update','destroy']]);
    Route::post('/replies/create/{thread}','RepliesController@CreateReply')->name('storecomment');
});


