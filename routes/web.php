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

Auth::routes();
Route::get('/', 'FrontController@login');
Route::get('/home', 'HomeController@index')->name("home");
Route::post("login", 'UserController@login')->name("user.login");
Route::get('barang/add', 'FrontController@addBarang')->name("barang.add");



