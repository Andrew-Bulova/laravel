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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login_form');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/user/list', 'UserController@index')->name('user_list');

Route::get('/user/new', 'UserController@create')->name('new_user');

Route::post('/user/adding', 'UserController@store')->name('user_add');

Route::get('/user/{id}/edit_form', 'UserController@edit')->name('user_edit_form');

Route::post('/user/{id}/update', 'UserController@update')->name('user_update');

Route::get('/user/{id}/deleting', 'UserController@destroy')->name('user_deleting');

//Route::get('/user/{id}', 'AserController@show')->name('show_user');


Route::get('/contractor/list', 'ContractorController@index')->name('contractor_list');

Route::get('/contractor/new', 'ContractorController@create')->name('new_contractor');

Route::post('/contractor/adding', 'ContractorController@store')->name('contractor_add');

Route::get('/contractor/{id}/edit_form', 'ContractorController@edit')->name('contractor_edit_form');

Route::post('/contractor/{id}/update', 'ContractorController@update')->name('contractor_update');

Route::get('/contractor/{id}/deleting', 'ContractorController@destroy')->name('contractor_destroy');

//Route::get('/contractor/{id}', 'ContractorController@show')->name('show_contractor');


Route::get('/feedback/list/{targetType}/{id}', 'FeedbackController@index')->name('feedback_list');

Route::get('/feedback/{id}/edit_form', 'FeedbackController@edit')->name('feedback_edit_form');

Route::post('/feedback/{id}/update', 'FeedbackController@update')->name('feedback_update');

Route::get('/feedback/{id}/deleting', 'FeedbackController@destroy')->name('feedback_deleting');

//Route::get('/feedback/new', 'FeedbackController@create')->name('new_feedback');
//Route::post('/feedback/adding', 'FeedbackController@store')->name('feedback_add');
//Route::get('/feedback/{id}', 'FeedbackController@show')->name('show_feedback');


Route::get('/entity/list/user/{id}', 'EntityController@index')->name('entity_list');

Route::get('/entity/new', 'EntityController@create')->name('new_entity');

Route::post('/entity/adding', 'EntityController@store')->name('entity_add');

Route::get('/entity/{id}/edit_form', 'EntityController@edit')->name('entity_edit_form');

Route::post('/entity/{id}/update', 'EntityController@update')->name('entity_update');

Route::get('/entity/{id}/deleting', 'EntityController@destroy')->name('entity_destroy');

//Route::get('/entity/{id}', 'EntityController@show')->name('show_entity');



Route::get('/requirement/list', 'RequirementController@index')->name('requirement_list');

Route::get('/requirement/new', 'RequirementController@create')->name('new_requirement');

Route::post('/requirement/adding', 'RequirementController@store')->name('requirement_add');

Route::get('/requirement/{id}/edit_form', 'RequirementController@edit')->name('requirement_edit_form');

Route::post('/requirement/{id}/update', 'RequirementController@update')->name('requirement_update');

Route::get('/requirement/{id}/deleting', 'RequirementController@destroy')->name('requirement_destroy');

//Route::get('/requirement/{id}', 'RequirementController@show')->name('show_requirement');


Route::get('/building/list/user/{id}', 'BuildingController@index')->name('building_list');

Route::get('/building/new', 'BuildingController@create')->name('new_building');

Route::post('/building/adding', 'BuildingController@store')->name('building_add');

Route::get('/building/{id}/edit_form', 'BuildingController@edit')->name('building_edit_form');

Route::post('/building/{id}/update', 'BuildingController@update')->name('building_update');

Route::get('/building/{id}/deleting', 'BuildingController@destroy')->name('building_destroy');

//Route::get('/building/{id}', 'BuildingController@show')->name('show_building');
