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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User
Route::resource('/daftar-user', 'DaftarController');
Route::post('/post-daftar-user', 'DaftarController@store');
Route::put('/edit-daftar-user/{id}', 'DaftarController@update');

//Informasi Toko
Route::resource('/informasi-toko', 'InformasiTokoController');
Route::post('/post-informasi-toko', 'InformasiTokoController@store');
Route::put('/edit-informasi-toko/{id}', 'InformasiTokoController@update');
