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

Route::get('users', 'UsersController@index')->middleware('auth', 'onlyadmin');

Route::post('users', 'UsersController@create');

Route::get('users/me', 'UsersController@me')->middleware('auth');

Route::get('users/{user_id}', 'UsersController@show')->middleware('auth', 'onlyuser');


Route::get('users/{user_id}/reminders', 'RemindersController@index')->middleware('auth', 'onlyuser');

Route::get('/reminders/{reminder}', 'RemindersController@show');

