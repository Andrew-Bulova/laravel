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


Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login_form');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['prefix' => 'admin',], function () { //'middleware' => ['auth']
    Route::group(['prefix'=>'user'], function (){
        Route::get('/list', 'UserController@index')->name('user_list');
        Route::get('/new', 'UserController@create')->name('new_user');
        Route::post('/adding', 'UserController@store')->name('user_add');
        Route::get('/{id}/edit_form', 'UserController@edit')->name('user_edit_form');
        Route::post('/{id}/update', 'UserController@update')->name('user_update');
        Route::get('/{id}/deleting', 'UserController@destroy')->name('user_deleting');
    });

    Route::group(['prefix'=>'contractor'], function (){
        Route::get('/list', 'ContractorController@index')->name('contractor_list');
        Route::get('/new', 'ContractorController@create')->name('new_contractor');
        Route::post('/adding', 'ContractorController@store')->name('contractor_add');
        Route::get('/{id}/edit_form', 'ContractorController@edit')->name('contractor_edit_form');
        Route::post('/{id}/update', 'ContractorController@update')->name('contractor_update');
        Route::get('/{id}/deleting', 'ContractorController@destroy')->name('contractor_destroy');
    });

    Route::group(['prefix'=>'feedback'], function (){
        Route::get('/list/{targetType}/{id}', 'FeedbackController@index')->name('feedback_list');
        Route::get('/{id}/edit_form', 'FeedbackController@edit')->name('feedback_edit_form');
        Route::post('/{id}/update', 'FeedbackController@update')->name('feedback_update');
        Route::get('/{id}/deleting', 'FeedbackController@destroy')->name('feedback_deleting');
    });

    Route::group(['prefix'=>'entity'], function (){
        Route::get('/list/user/{id}', 'EntityController@index')->name('entity_list');
        Route::get('/new', 'EntityController@create')->name('new_entity');
        Route::post('/adding', 'EntityController@store')->name('entity_add');
        Route::get('/{id}/edit_form', 'EntityController@edit')->name('entity_edit_form');
        Route::post('/{id}/update', 'EntityController@update')->name('entity_update');
        Route::get('/{id}/deleting', 'EntityController@destroy')->name('entity_destroy');
    });

    Route::group(['prefix'=>'requirement'], function (){
        Route::get('/list', 'RequirementController@index')->name('requirement_list');
        Route::get('/new', 'RequirementController@create')->name('new_requirement');
        Route::post('/adding', 'RequirementController@store')->name('requirement_add');
        Route::get('/{id}/edit_form', 'RequirementController@edit')->name('requirement_edit_form');
        Route::post('/{id}/update', 'RequirementController@update')->name('requirement_update');
        Route::get('/{id}/deleting', 'RequirementController@destroy')->name('requirement_destroy');
    });

    Route::group(['prefix'=>'building'], function (){
        Route::get('/list/entity/{id}', 'BuildingController@index')->name('building_list');
        Route::get('/new', 'BuildingController@create')->name('new_building');
        Route::post('/adding', 'BuildingController@store')->name('building_add');
        Route::get('/{id}', 'BuildingController@show');
        Route::get('/{id}/edit_form', 'BuildingController@edit')->name('building_edit_form');
        Route::post('/{id}/update', 'BuildingController@update')->name('building_update');
        Route::get('/{id}/deleting', 'BuildingController@destroy')->name('building_destroy');
    });
});
