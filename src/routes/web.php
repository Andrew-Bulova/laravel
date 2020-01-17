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

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@regForm')->name('reg_form');

Route::post('/create', 'UserController@createUser')->name('create_user');

Route::get('/test', 'UserController@test');
