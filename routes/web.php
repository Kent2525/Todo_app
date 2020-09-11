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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'TaskController@add');
    Route::get('/', 'TaskController@index');
});

Route::get('/admin/task/{id?}', 'TaskController@index')->name('admin.task');
Route::post('/admin/task/{id?}', 'TaskController@create')->name('admin.task');
Route::post('/admin/task/{id?}', 'TaskController@edit');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

