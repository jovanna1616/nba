<?php

use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;

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


// teams
Route::get('/', 'TeamsController@index');
Route::get('/{id}', 'TeamsController@show');


// players
Route::get('/players/{id}', 'PlayersController@show');