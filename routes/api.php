<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BuyController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ProductController;
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
Route::namespace('Api')->name('api.')->group(function(){
    Route::prefix('products')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('index_products');
        Route::get('/{id}',[ProductController::class,'show'])->name('single_products');

        Route::post('/', [ProductController::class,'store'])->name('store_products');
        Route::put('/{id}', [ProductController::class, 'update'])->name('update_products');
        Route::delete('/{id}',[ProductController::class,'delete'])->name('delete_products');
        
    });
    Route::prefix('buy')->group(function(){
        Route::match(['get','post'],'/', [BuyController::class,'store'])->name('store_buy')->middleware('apiJwt');
        
    });
    Route::post('auth/login', [AuthController::class,'login']);
    
});
