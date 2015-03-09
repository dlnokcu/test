<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','UserController@index');

Route::get('create', 'UserController@create');

Route::get('test', 'UserController@test');

Route::any('save', 'UserController@save');

Route::get('edit/{id}', 'UserController@edit');

Route::get('update/{id}', 'UserController@update');