<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/tampilstring', function () {
    return "Halo, selamat datang di matakuliah framework";
});
Route::get('/tampilview', function () {
    return view('sampleview');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
Route::get('/sampletable', function () {
    return view('sampletable');
});
Route::get('tampilcontroller', 'PegawaiController@index');

Route::get('calculator/caltambah', 'CalculatorController@tambah')->name('tmbh');
Route::get('calkurang', 'CalculatorController@kurang')->name('krg');
Route::get('calkali', 'CalculatorController@kali')->name('kali');
Route::get('calbagi', 'CalculatorController@bagi')->name('bagi');
Route::get('caldiv', 'CalculatorController@div')->name('div');
Route::get('calmod', 'CalculatorController@mod')->name('mod');

Route::get('calculator', 'CalculatorController@index');

Route::get('/dosen','DosenController@index')->name('dosenList');
Route::get('/tambahdosen','DosenController@tambah')->name('dosenAdd');
Route::post('/simpandosen','DosenController@inputData')->name('dosenSave');
Route::get('/editdosen/{id}','DosenController@edit')->name('dosenEdit');
Route::post('/updatedosen/{id}','DosenController@update')->name('dosenUpdate');
Route::get('/hapusdosen/{id}','DosenController@hapus')->name('dosenDelete');