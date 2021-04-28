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

Route::get('/vendor', 'App\Http\Controllers\VendorController@vendor');
Route::get('/foodrtr', 'App\Http\Controllers\VendorController@getFoodRestaurant');
Route::get('/cakertr', 'App\Http\Controllers\VendorController@getCakeRestaurant');
Route::get('/speakerrtr', 'App\Http\Controllers\VendorController@getSpeakerRestaurant');
Route::get('/decorrtr', 'App\Http\Controllers\VendorController@getDecorRestaurant');
Route::get('/vendor/detail/{id}', 'App\Http\Controllers\VendorController@detail');
Route::get('/getproduct/{id}', 'App\Http\Controllers\ProductController@getProduct');
Route::get('/product/detail/{id}', 'App\Http\Controllers\ProductController@detail');