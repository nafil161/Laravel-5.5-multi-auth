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

Route::get('/login','AdminLoginController@ShowLoginForm')->name('admin.auth.login');
Route::post('/login','AdminLoginController@login')->name('admin.auth.login.post');
Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');

Route::get('/','AdminController@index')->name('admin.dashboard');
Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');

