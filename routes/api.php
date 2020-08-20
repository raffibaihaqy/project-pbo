<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Admin
Route::get('admin', 'API\AdminController@index');

//User
Route::resource('/daftar-user', 'DaftarController');
Route::post('/post-daftar-user', 'DaftarController@store');
Route::put('/edit-daftar-user/{id}', 'DaftarController@update');

//Informasi Toko
Route::resource('/informasi-toko', 'InformasiTokoController');
Route::post('/post-informasi-toko', 'InformasiTokoController@store');
Route::put('/edit-informasi-toko/{id}', 'InformasiTokoController@update');
