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

// Route::get('/', function () {
//     return view('welcome');
// });

// Homeページ
Route::get('/', 'TopController@index');
Route::get('/index.html', 'TopController@index');
Route::get('/index.php', 'TopController@index');

// Aboutページ
Route::get('/about', 'AboutController@index');
Route::get('/about.html', 'AboutController@index');
Route::get('/about.php', 'AboutController@index');

// Contactページ
Route::get('/contact', 'ContactController@index');
Route::get('/contact.html', 'ContactController@index');
Route::get('/contact.php', 'ContactController@index');

//Service系統のページ
Route::get('/service', 'ServiceController@index');
Route::get('/service/index.html', 'ServiceController@index');
Route::get('/service/index.php', 'ServiceController@index');

//画像投稿系統のサービス
Route::get('/service/post_image.php', 'ServiceController@post_image');