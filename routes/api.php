<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\CommentController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StarRatingController;


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
Route::get('/vendor', [VendorController::class, 'vendor']);
Route::get('/allvendor', [VendorController::class, 'getAllVendor']);
Route::get('/foodrtr', [VendorController::class, 'getFoodRestaurant']);
Route::get('/cakertr', [VendorController::class, 'getCakeRestaurant']);
Route::get('/speakerrtr', [VendorController::class, 'getSpeakerRestaurant']);
Route::get('/decorrtr', [VendorController::class, 'getDecorRestaurant']);
Route::get('/vendor/detail/{id}', [VendorController::class, 'detail']);
Route::get('/getproduct/{id}', [ProductController::class, 'getProduct']);
Route::get('/product/detail/{id}', [ProductController::class, 'detail']);
Route::get('/allfoodrtr', [ProductController::class, 'foodRestaurant']);
Route::get('/allcakertr', [ProductController::class, 'cakeRestaurant']);
Route::get('/allspeakerrtr', [ProductController::class, 'speakerRestaurant']);
Route::get('/alldecorrtr', [ProductController::class, 'decorRestaurant']);

Route::get('/totalComment/{id}', [CommentController::class, 'getCommentByVendor']);
Route::get('/totalCommentp/{id}', [CommentController::class, 'getCommentByProduct']);
Route::post('/addComment/{id}', [CommentController::class, 'addCommentByProduct']);
Route::post('/addCommentvendor/{id}', [CommentController::class, 'addCommentByVendor']);

// Authen
Route::get('getUser',[AuthController::class,'getAccount']);
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
    });
});

//Cart
Route::get('/user/cart', [CheckoutController::class, 'index']);
// Cart
Route::get('/getOrderList', [CheckoutController::class, 'getOrderList']);
Route::get('/cart', [CheckoutController::class, 'getCart']);
Route::get('/totalProduct', [CheckoutController::class, 'getTotalProduct']);
Route::get('/totalPrice', [CheckoutController::class, 'getTotalPrice']);
Route::delete('/deletecart/{id}',[CheckoutController::class, 'destroyCartItem']);

// Order
Route::post('/product/orderlist', [CheckoutController::class, 'postOrderList']);
Route::post('/product/order', [CheckoutController::class, 'postOrder']);
Route::get('/product/getOrder', [CheckoutController::class, 'getOrder']);
Route::get('/getOrderWithUser', [CheckoutController::class, 'getOrderWithUser']);
Route::delete('/orderlist/delete', [CheckoutController::class, 'deleteOrder']);
Route::delete('/order/cancel', [CheckoutController::class, 'cancelOrder']);

//Star Rating
Route::get('/getStar/{product_id}', [StarRatingController::class, 'getStar']);
Route::post('/product/review', [StarRatingController::class, 'postReview']);




