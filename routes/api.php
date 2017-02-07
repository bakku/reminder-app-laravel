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

Route::get('reminders', 'RemindersController@index');

Route::post('users', 'UsersController@create');

Route::get('/reminders/{reminder}', 'RemindersController@show');

