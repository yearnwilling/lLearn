<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::auth();
//
//Route::get('/home', 'HomeController@index');
//
//Route::get('/user/test',  'HomeController@index');
//
//Route::get('article/{id}', 'ArticleController@show');
//
//Route::post('comment', 'CommentController@store');
//
//
//Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
//    Route::get('/', 'HomeController@index');
//    Route::resource('article', 'ArticleController');
//});

// static page
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users','UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
