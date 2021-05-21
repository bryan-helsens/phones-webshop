<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrdersController;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('hello', function () {
    return 'world';
});


Route::group(['prefix' => 'auth'], function(){
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/mobile/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::post('/mobile/order', [OrdersController::class, "createMobileOrder"])->name("createMobileOrder");


    Route::middleware(["auth.jwt"])->group(function(){
        Route::post('/token/refresh', [AuthController::class,'refresh']);
        Route::post('/logout', [AuthController::class, 'logout']);

        Route::post('/mobile/account', [AccountController::class, "createAccountMobile"])->name("createAccountMobile");
        Route::get('/account', [AccountController::class, "getAccount"])->name("getAccount");
        Route::get('/orders', [OrdersController::class, "getAllOrders"])->name("getAllOrders");
    });
});


Route::middleware(["auth.jwt"])->group(function(){
    Route::get('/orders', [OrdersController::class, "getAllOrders"])->name("getAllOrders");
    Route::post('/order', [OrdersController::class, "createOrder"])->name("createOrder");
    Route::get('account', [AccountController::class, "getAccount"])->name("getAccount");
});

//Route::post('/mobile/account', [AccountController::class, "createAccountMobile"])->name("createAccountMobile");
Route::post('/account', [AccountController::class, "createAccount"])->name("createAccount");



Route::get('products', [ProductController::class, 'all'])->name("all");
Route::get('details/products', [ProductController::class, 'productWithDetails'])->name("productWithDetails");
Route::get('products/{filter}', [ProductController::class, 'filterProduct'])->name('filter');
Route::get('product/{id}', [ProductController::class, 'productByID'])->name("productByID");
Route::get('product/colors/{id}', [ProductController::class, 'getProductColors'])->name("productColors");

Route::get('order/{order_id}', [OrdersController::class, "orderByID"])->name("orderByID");


