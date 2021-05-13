<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin_vendor_controller;
use App\Http\Controllers\admin_product_controller;
use App\Http\Controllers\admin_user_controller;
use App\Http\Controllers\admin_contact_controller;
use App\Http\Controllers\admin_dashboard_controller;

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

// Route::get('/vendor', 'App\Http\Controllers\VendorController@vendor');
// Route::get('/foodrtr', 'App\Http\Controllers\VendorController@getFoodRestaurant');
// Route::get('/cakertr', 'App\Http\Controllers\VendorController@getCakeRestaurant');
// Route::get('/speakerrtr', 'App\Http\Controllers\VendorController@getSpeakerRestaurant');
// Route::get('/decorrtr', 'App\Http\Controllers\VendorController@getDecorRestaurant');
// Route::get('/vendor/detail/{id}', 'App\Http\Controllers\VendorController@detail');
// Route::get('/getproduct/{id}', 'App\Http\Controllers\ProductController@getProduct');
// Route::get('/product/detail/{id}', 'App\Http\Controllers\ProductController@detail');
// Route::get('/vendor', [VendorController::class, 'vendor']);
// Route::get('/foodrtr', [VendorController::class, 'getFoodRestaurant']);
// Route::get('/cakertr', [VendorController::class, 'getCakeRestaurant']);
// Route::get('/speakerrtr', [VendorController::class, 'getSpeakerRestaurant']);
// Route::get('/decorrtr', [VendorController::class, 'getDecorRestaurant']);
// Route::get('/vendor/detail/{id}', [VendorController::class, 'detail']);
// Route::get('/getproduct/{id}', [ProductController::class, 'getProduct']);
// Route::get('/product/detail/{id}', [ProductController::class, 'detail']);
// Route::get('/allfoodrtr', [ProductController::class, 'foodRestaurant']);
// Route::get('/allcakertr', [ProductController::class, 'cakeRestaurant']);
// Route::get('/allspeakerrtr', [ProductController::class, 'speakerRestaurant']);
// Route::get('/alldecorrtr', [ProductController::class, 'decorRestaurant']);

//ADMIN----------------------------------------------------------------------
Route::resource('admin_product', admin_product_controller::class);
Route::resource('admin_vendor', admin_vendor_controller::class);
Route::resource('admin_user', admin_user_controller::class);
Route::resource('admin_contact', admin_contact_controller::class);
Route::get('total_card', [admin_dashboard_controller::class, 'total_card']);
Route::get('chart_section', [admin_dashboard_controller::class, 'chart_section']);
Route::get('chart2', [admin_dashboard_controller::class, 'chart2']);