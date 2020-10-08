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

// Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/task', 'TaskController@index')->name('admin.task.index');
    Route::get('/task/show/{id}', 'TaskController@show')->name('admin.task');
    Route::get('/task/addTitle', 'TaskController@addTitle')->name('admin.task.addTitle');
    Route::post('/task/create', 'AddTitleController@create');
    Route::get('/task/{id?}/delete', 'TaskController@delete');
    Route::get('/task/editTitle', 'TaskController@editTitle')->name('admin.task.editTitle');
    Route::post('/task/editTitle', 'EditTitleController@edit');
    Route::get('/task/content', 'ContentController@delete');
    Route::post('/task/content', 'ContentController@edit');
    Route::get('/task/addContent/{id?}', 'TaskController@addContent')->name('admin.task.addContent');
    Route::post('/addContent/{id?}', 'AddContentController@create');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
    //     return view('top');
    // });

Route::get('/', 'TopController@index');