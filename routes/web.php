<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authPost;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




#ProductController:

Route::get('/fqa', [ProductController::class, 'fqa']);
Route::get('/dashboard', [ProductController::class, 'index']);
Route::get('/add', [ProductController::class, 'add']);
Route::get('/man', [ProductController::class, 'man']);
Route::get('/woman', [ProductController::class, 'woman']);
Route::get('/kides', [ProductController::class, 'kides']);
Route::get('/shopping', [ProductController::class, 'prodcart']);
Route::get('/prod/{id}', [ProductController::class, 'addProduct']);
Route::post('/addprod', [ProductController::class, 'store']);
Route::put('/update-shopping', [ProductController::class, 'update']);
Route::delete('/delete-shopping', [ProductController::class, 'delete']);



#logincontroller:

Route::get('/login', [logincontroller::class, 'logincreate']);
Route::post('/store', [logincontroller::class, 'store']);

#authPost:

Route::get('/', [authPost::class,'create']);
Route::get('/welcome', [authPost::class,'welcome']);
Route::post('/auth', [authPost::class,'store']);


#OrderController:
Route::get('/orders', [OrderController::class, 'customerOrders']);
Route::get('/check', [OrderController::class, 'checkout']);
Route::get('/thankyou', [OrderController::class, 'showThankYouPage']);
Route::post('/form', [OrderController::class, 'store']);


