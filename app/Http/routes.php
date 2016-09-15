<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('article','ArticleController@index');
Route::get('article/add','ArticleController@add');
Route::post('article/save','ArticleController@save');
Route::get('article/edit/{id}','ArticleController@edit');
Route::post('article/update','ArticleController@update');
Route::get('article/delete/{id}','ArticleController@delete');

