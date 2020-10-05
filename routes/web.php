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
    Route::get('/', 'TaskController@add');
    Route::get('/task', 'TaskController@index')->name('admin.task.index');
    Route::get('/task/show/{id}', 'TaskController@show')->name('admin.task');
    Route::post('/task/create', 'TaskController@create');
    Route::get('/task/{id?}/delete', 'TaskController@delete');
    Route::get('/updatetitle/{id?}', 'UpdateTitleController@add');
    Route::post('/updatetitle/{id?}', 'UpdateTitleController@update');
    Route::get('/content/{id?}', 'ContentController@add');
    Route::post('/content/{id?}', 'ContentController@update');
    Route::get('/content/{id?}', 'ContentController@delete');
    Route::get('/addheading/{id?}', 'AddHeadingController@add');
    Route::post('/addheading/{id?}', 'AddHeadingController@create');
    Route::get('/task/add', 'TaskController@add')->name('admin.task.add');
    
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
//     return view('top');
// });


Route::get('/', 'TopController@index');