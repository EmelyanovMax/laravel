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

Route::get('/', 'ArticleController@index');

//Route::delete('content/delete/{article}', 'IndexController@delete')->name('articleDelete');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/articles','ArticleController@index');
Route::get('/article/create','ArticleController@create')->name('articleCreate');;
Route::get('/article/edit/{id}','ArticleController@edit')->name('articleEdit');
Route::post('/article/update/{id}','ArticleController@update')->name('articleUpdate');
Route::get('/article/delete/{id}','ArticleController@delete')->name('articleDelete');;
Route::post('/article/store','ArticleController@store')->name('articleStore');
Route::get('/article/show/{id}','ArticleController@show')->name('articleShow');
