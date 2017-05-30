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
//autentifikasi login laravel menggunakan route
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
//user ketika login atau belum
Route::get('login', 'HomeController@index')->name('login');
//router post login
Route::post('login', 'UserController@cekLogin');

//route wajib login
Route::group(['middleware' => 'auth'], function () {
	//
    Route::get('barang/tambah', 'BarangController@addBarang')->name('sidebar.barang.tambah');
    Route::get('barang/list', 'BarangController@lihatBarang')->name('sidebar.barang.lihat');
    Route::post('barang/tambah', 'BarangController@submitBarang')->name('submit.barang');

    Route::get('warna/get', 'WarnaController@getWarna')->name("get.warna");
});
Auth::routes();

Route::get('/home', 'HomeController@index');
