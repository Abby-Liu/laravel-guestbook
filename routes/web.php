<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('messages', 'MessageController@index');
Route::post('message', 'MessageController@store');
Route::delete('message/{message}', 'MessageController@destroy');
Route::get('messages/{message}', 'MessageController@show');
Route::get('messages/{message}/edit','MessageController@edit');
Route::patch('messages/{message}', 'MessageController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
