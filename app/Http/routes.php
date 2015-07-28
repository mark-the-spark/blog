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

//Some mistake which has been corrected.

//Some cool new feature that requires lots of work....


//Articles
Route::get('/', ['uses' => 'ArticlesController@index', 'as' => 'home']);
Route::get('/create', ['uses' => 'ArticlesController@create', 'as' => 'article.create']);
Route::post('/', ['uses' => 'ArticlesController@store', 'as' => 'article.store']);

Route::get('/{article}', ['uses' => 'ArticlesController@show', 'as' => 'article.show'])->where(['article' => '[0-9]+']);
Route::get('/{article}/edit', ['uses' => 'ArticlesController@edit']);
Route::patch('/{article}', 'ArticlesController@update');
Route::delete('/{article}', ['uses' =>'ArticlesController@destroy', 'as' => 'article.destroy']);

//Tags
Route::get('/tags', ['uses' =>'TagsControler@index', 'as' => 'tag.index']);
Route::get('/tags/{tag}', ['uses' => 'TagsController@show', 'as' => 'tag.show']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');