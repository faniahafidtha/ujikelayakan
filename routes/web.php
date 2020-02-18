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
Route::resource('types','TypeController');
Route::resource('rooms','RoomController');
Route::resource('officers','OfficerController');
Route::resource('levels','LevelController');
Route::resource('detail_pinjams','Detail_PinjamController');
Route::resource('pegawais','PegawaiController');
Route::resource('peminjamans','PeminjamanController');
Route::resource('inventaris','InventariController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/user' , 'UserController@index');

Route::get('/laporans', 'LaporanController@index')->name('laporans');
Route::get('/laporans/cari', 'LaporanController@cari');
Route::get('/laporans/print', 'LaporanController@print')->name('laporans.print');