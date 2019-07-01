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

Route::get('login', 'Auth\LoginController@get_login')->name('get_login');
Route::post('login', 'Auth\LoginController@post_login')->name('post_login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('berita', 'BeritaController@index')->name('berita.index');
Route::get('search', 'PencarianController@index')->name('pencarian.index');
Route::get('peringkat-universitas', 'PeringkatUniversitasController@index')->name('peringkat_universitas');
