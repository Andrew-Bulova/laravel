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

Route::get('/', 'PerfumesController@index');

Route::post('/save', 'PerfumesController@saveSmell');

Route::get('/add_perfume', 'PerfumesController@addPerfume');

Route::get('/delete/{id}', 'PerfumesController@delPerfume');
