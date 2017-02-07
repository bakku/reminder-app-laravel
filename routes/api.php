<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('users', 'UsersController@index')->middleware('auth');

Route::post('users', 'UsersController@create');

Route::get('reminders', 'RemindersController@index')->middleware('auth');

Route::get('/reminders/{reminder}', 'RemindersController@show');

