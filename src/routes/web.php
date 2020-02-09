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
use App\CategoryModel as Category;

Route::get('/', function () {
    $categories = Category::whereParentId('0')->get();

    return view('list', compact('categories'));
});
