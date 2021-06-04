<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VendorAuthenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin_vendor_controller;
use App\Http\Controllers\admin_product_controller;
use App\Http\Controllers\admin_user_controller;
use App\Http\Controllers\admin_contact_controller;
use App\Http\Controllers\admin_dashboard_controller;
use App\Http\Controllers\admin_order_controller;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StarRatingController;
use App\Http\Controllers\MomoPaymentController;
use App\Http\Controllers\vendor_update_profile_controller;
use App\Http\Controllers\vendor_manage_order_controller;


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
Route::get('/vendor', [VendorController::class, 'vendor']);
Route::get('/allvendor', [VendorController::class, 'getAllVendor']);
Route::get('/foodrtr', [VendorController::class, 'getFoodRestaurant']);
Route::get('/cakertr', [VendorController::class, 'getCakeRestaurant']);
Route::get('/speakerrtr', [VendorController::class, 'getSpeakerRestaurant']);
Route::get('/decorrtr', [VendorController::class, 'getDecorRestaurant']);
Route::get('/vendor/detail/{id}', [VendorController::class, 'detail']);
Route::get('/getproduct/{id}', [ProductController::class, 'getProduct']);
Route::get('/getAllProduct', [ProductController::class, 'getAllProduct']);
Route::get('/product/detail/{id}', [ProductController::class, 'detail']);
Route::get('/allfoodrtr', [ProductController::class, 'foodRestaurant']);
Route::get('/allcakertr', [ProductController::class, 'cakeRestaurant']);
Route::get('/allspeakerrtr', [ProductController::class, 'speakerRestaurant']);
Route::get('/alldecorrtr', [ProductController::class, 'decorRestaurant']);

Route::get('/totalComment/{id}', [CommentController::class, 'getCommentByVendor']);
Route::get('/totalCommentp/{id}', [CommentController::class, 'getCommentByProduct']);
Route::post('/addComment/{id}', [CommentController::class, 'addCommentByProduct']);
Route::post('/addCommentvendor/{id}', [CommentController::class, 'addCommentByVendor']);
Route::delete('/distroycmtproduct/{id}', [CommentController::class, 'distroyCommentByProduct']);
Route::delete('/distroycmtvendor/{id}', [CommentController::class, 'distroyCommentByVendor']);

Route::post('/contact', [ContactController::class, 'contact']);


// // Authen
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

// //Cart
Route::get('/user/cart', [CheckoutController::class, 'index']);
// // Cart
Route::get('/getOrderList', [CheckoutController::class, 'getOrderList']);
Route::get('/cart', [CheckoutController::class, 'getCart']);
Route::get('/cartByVendor', [CheckoutController::class, 'getCartByVendor']);
Route::get('/totalProduct', [CheckoutController::class, 'getTotalProduct']);
Route::get('/totalPrice', [CheckoutController::class, 'getTotalPrice']);
Route::delete('/deletecart/{id}',[CheckoutController::class, 'destroyCartItem']);

// // Order
Route::post('/product/orderlist', [CheckoutController::class, 'postOrderList']);
Route::post('/product/order', [CheckoutController::class, 'postOrder']);
Route::get('/product/getOrder', [CheckoutController::class, 'getOrder']);
Route::get('/getOrderWithUser', [CheckoutController::class, 'getOrderWithUser']);
Route::delete('/orderlist/delete', [CheckoutController::class, 'deleteOrder']);
Route::delete('/order/cancel', [CheckoutController::class, 'cancelOrder']);
Route::put('/product/increase/{id}', [CheckoutController::class, 'increase']);
Route::put('/product/decrease/{id}', [CheckoutController::class, 'decrease']);

//Payment
Route::post('/paymentOnline', [MomoPaymentController::class, 'momoWebPayment']);

// //Star Rating
Route::get('/getStar/{product_id}', [StarRatingController::class, 'getStar']);
Route::post('/product/review', [StarRatingController::class, 'postReview']);

// Authen Vendor
Route::get('getVendor',[VendorAuthenController::class,'getVendor']);
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('vendorLogin', [VendorAuthenController::class, 'vendorLogin']);
    Route::post('vendorRegister', [VendorAuthenController::class, 'vendorRegister']);

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('vendorLogout', [VendorAuthenController::class, 'vendorLogout']);
        Route::get('vendor', [VendorAuthenController::class, 'vendor']);
    });
});


Route::get('/vendor', [VendorController::class, 'vendor']);
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

//ADMIN----------------------------------------------------------------------
Route::resource('admin_product', admin_product_controller::class);
Route::resource('admin_vendor', admin_vendor_controller::class);
Route::get('list_new_vendor', [admin_vendor_controller::class, 'list_new_vendor']);
Route::get('list_approved_vendor', [admin_vendor_controller::class, 'list_vendor_approved']);
Route::get('list_rejected_vendor', [admin_vendor_controller::class, 'list_vendor_rejected']);
Route::resource('admin_user', admin_user_controller::class);
Route::resource('admin_contact', admin_contact_controller::class);

Route::resource('admin_order', admin_order_controller::class);
Route::get('user_infor_order', [admin_order_controller::class, 'get_infor_user']);
Route::get('cancel_order_list/{vendor_id}', [admin_order_controller::class, 'get_cancel_order_by_vendor']);
Route::get('new_order_list/{vendor_id}', [admin_order_controller::class, 'get_new_order_by_vendor']);
Route::get('handling_order_list/{vendor_id}', [admin_order_controller::class, 'get_handling_order_by_vendor']);
Route::get('success_order_list/{vendor_id}', [admin_order_controller::class, 'get_success_order_by_vendor']);
Route::get('order_list/{vendor_id}', [admin_order_controller::class, 'get_order_by_vendor']);
Route::get('order_detail/{user_id}', [admin_order_controller::class, 'detail_order']);

Route::get('total_card', [admin_dashboard_controller::class, 'total_card']);
Route::get('chart_section', [admin_dashboard_controller::class, 'chart_section']);
Route::get('chart2', [admin_dashboard_controller::class, 'chart2']);
Route::get('/test', [CheckoutController::class, 'getProductVendo']);


//VENDOR
Route::patch('/vendor_update_profile/{id}', [vendor_update_profile_controller::class, 'update_profile']);

