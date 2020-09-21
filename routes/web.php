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

// Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'TaskController@add');
});

Route::get('/admin/task', 'TaskController@index');
Route::get('/admin/task/{id?}', 'TaskController@show')->name('admin.task');
Route::post('/admin/task/{id?}', 'TaskController@create');
Route::get('/admin/task/{id?}/delete', 'TaskController@delete');

Route::get('/admin/updatetitle/{id?}', 'UpdateTitleController@add');
Route::post('/admin/updatetitle/{id?}', 'UpdateTitleController@update');

Route::get('/admin/content/{id?}', 'ContentController@add');
Route::post('/admin/content/{id?}', 'ContentController@update');
Route::get('/admin/content/{id?}', 'ContentController@delete');

Route::get('/admin/addheading/{id?}', 'AddHeadingController@add');
Route::post('/admin/addheading/{id?}', 'AddHeadingController@create');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
