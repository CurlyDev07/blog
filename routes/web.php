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

Route::get('/', 'homeController@index');

// Comments
Route::get('/posts/create', 'PostsController@create');
Route::post('post/{comment_id}', 'CommentsController@add_comment');

// Posts
Route::get('/post/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

//Register
Route::get('/register', 'RegisterController@create')->name('register');
Route::post('/register', 'RegisterController@store')->name('register');
//Login

Route::get('/login', 'SessionsController@login')->name('login');
Route::post('/login', 'SessionsController@store')->name('login.post');

//Logout
Route::get('/logout', 'SessionsController@destroy')->name('session.destroy');

