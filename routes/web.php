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


Route::get('/', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);


Auth::routes();



Route::get('/home', 'HomeController@index');