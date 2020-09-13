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


Route::get('/admin/task', 'TaskController@add');
Route::get('/admin/task/{id?}', 'TaskController@index')->name('admin.task');
Route::post('/admin/task/{id?}', 'TaskController@update');
Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/admin/task/{id?}', 'TaskController@createtitle');
Route::post('/admin/task/{id?}', 'TaskController@createtitle');

Auth::routes();

