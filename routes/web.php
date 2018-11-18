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

Route::get('/', 'HomeController@root');

Route::get('blogs/{id}/change', 'BlogController@change');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('people', 'PersonController');

Route::resource('blogs', 'BlogController');

Route::resource('blogs', 'BlogController');

Route::resource('roles', 'RoleController');
