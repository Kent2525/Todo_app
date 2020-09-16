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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'TaskController@index');
    Route::get('/admin/title/{id}', 'TaskController@show')->name('admin.task');
    Route::post('/admin/title/{id}', 'TaskController@store');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
