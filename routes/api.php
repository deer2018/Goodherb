<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/provinces','API\TambonController@getProvinces');
Route::get('/province/{province_code}/amphoes','API\TambonController@getAmphoes');
Route::get('/province/{province_code}/amphoe/{amphoe_code}/tambons','API\TambonController@getTambons');
Route::get('/province/{province_code}/amphoe/{amphoe_code}/tambon/{tambon_code}/zipcodes','API\TambonController@getZipcodes');

