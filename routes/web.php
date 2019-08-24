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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/pictures', 'PicturesController@index')->name('pictures');

Route::get('/pictures/create', 'PicturesController@create')->name('pictures.create');

Route::post('/pictures/store','PicturesController@store')->name('pictures.store');

Route::get('/pictures/show/{id}','PicturesController@show')->name('pictures.show');

Route::get('/documents', 'DocumentsController@index')->name('documents');

Route::get('/documents/create', 'DocumentsController@create')->name('documents.create');

Route::post('/documents/store','DocumentsController@store')->name('documents.store');

Route::get('/documents/show/{id}','DocumentsController@show')->name('documents.show');
