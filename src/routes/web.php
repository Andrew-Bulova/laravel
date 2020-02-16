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

Route::get('/add_form', 'StudentController@addForm')->name('add_form');

Route::post('/new_student', 'StudentController@createStudent')->name('new_student');

Route::get('/index', 'StudentController@index')->name('index');

Route::get('/student/{id}/missing', 'StudentController@addMissing')->name('missing');

