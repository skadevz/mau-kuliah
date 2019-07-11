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

Route::group(['prefix' => 'location'], function () {
    Route::get('get-cities/{province_id}', 'API\LocationController@get_cities');
    Route::get('get-districts/{city_id}', 'API\LocationController@get_districts');
});

Route::get('get-major-detail/{univ_id}/{maj_id}/{deg_id}', 'API\UniversityController@get_major_detail');
