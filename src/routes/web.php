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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', 'BookController@store')->name('book_list');

Route::get('/add_book', 'BookController@addBook')->name('add_book');

Route::post('/create_book', 'BookController@create')->name('create_book');

Route::get('/delete_book/{id}', 'BookController@delete')->name('delete_book');

Route::get('/book/{id}', 'BookController@showBook')->name('showBook');

Route::get('/edit_book/{id}', 'BookController@editBook')->name('edit_book');

Route::get('/filter_form', 'BookController@filterForm')->name('filter_form');

Route::post('/filter', 'BookController@filter')->name('filter');

Route::get('/test', 'BookController@test');



