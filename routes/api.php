<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoleController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//other routes
Route::get('/fetchAllProducts', [ProductController::class, 'index']);
Route::get('/fetchAllUsers', [UserController::class, 'index']);
//protected routes
Route::middleware('auth:sanctum')->group(function () {

    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('roles', RoleController::class);

    //custom routes
    Route::get('/ordersPerUser/{id}', [OrderController::class, 'ordersPerUser']);

});

