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
    // Route::get('/', 'TaskController@index');
    Route::post('/{id}', 'TaskController@store');
    Route::get('/task/{id}', 'TaskController@show')->name('admin.task');
    Route::put('/task/{id}', 'TaskController@update');
    Route::delete('/task/{id}', 'TaskController@delete');
    Route::get('/title', 'TitleController@index');
    Route::post('/title', 'TitleController@store');
    Route::get('/title/{id}', 'TitleController@show');
    Route::put('/title', 'TitleController@update');
    Route::delete('/title/{id}', 'TitleController@destroy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'IndexController@index');
