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

//routing mahasiswa
Route::get('mahasiswa', 'mahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-tambah', 'mahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'mahasiswaController@simpan')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');

Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@hapus')->name('mahasiswa.hapus');

//makul
Route::get('makul', 'makulcontroller@index')->name('makul');
Route::get('tambah-makul', 'makulcontroller@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulcontroller@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulcontroller@edit')->name('edit.makul');
Route::post('update-makul/{id}', 'makulcontroller@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'makulcontroller@destroy')->name('hapus.makul');


//Routing Nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-create', 'NilaiController@create')->name('nilai.create');
Route::post('nilai-simpan', 'NilaiController@store')->name('nilai.simpan');
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('nilai-update/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('nilai.hapus');