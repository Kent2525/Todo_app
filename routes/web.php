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
    Route::get('/task', 'TodoController@index')->name('admin.task.index');
    Route::get('/task/show/{id}', 'TodoController@show')->name('admin.task');
    Route::get('/task/addTitle', 'TodoController@addTitle')->name('admin.task.addTitle');
    Route::post('/task/create', 'AddTitleController@create');
    Route::get('/task/{id?}/delete', 'TodoController@delete');
    Route::get('/task/editTitle', 'TodoController@editTitle')->name('admin.task.editTitle');
    Route::post('/task/editTitle', 'EditTitleController@edit');
    Route::get('/task/content', 'ContentController@delete');
    Route::post('/task/content', 'ContentController@edit');
    Route::get('/task/addContent/{id?}', 'TodoController@addContent')->name('admin.task.addContent');
    Route::post('/addContent/{id?}', 'AddContentController@create');
});

Route::get('/', 'TopController@index');
Route::post('/create', 'TopController@create')->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
    //     return view('top');
    // });
