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
Route::post('search', 'PencarianController@index')->name('pencarian.index');
Route::post('perbandingan', 'PerbandinganController@index')->name('perbandingan.index');
Route::get('peringkat-universitas', 'PeringkatUniversitasController@index')->name('peringkat_universitas');

// Admin Page
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::group(['prefix' => 'master'], function () {
        Route::group(['prefix' => 'universitas'], function () {
            Route::get('/', 'Master\UniversitasController@index')->name('universitas.index');
            Route::get('create', 'Master\UniversitasController@create')->name('universitas.create');
            Route::post('store', 'Master\UniversitasController@store')->name('universitas.store');
            Route::get('{id}/edit', 'Master\UniversitasController@edit')->name('universitas.edit');
            Route::post('update', 'Master\UniversitasController@update')->name('universitas.update');
            Route::get('{id}/delete', 'Master\UniversitasController@delete')->name('universitas.delete');
        });
    });
});
