<?php

use App\Http\Controllers\auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\ListProducts;
use App\Http\Controllers\products\CreateProduct;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('login')->group(function (){
    Route::get('/', [Login::class,'showFormLogin'])->name('login.login');
    Route::post('/do',[Login::class,'login'])->name('login.do');
    Route::match(['get','post'],'/logout',[Login::class,'logout'])->name('login.logout');
});
Route::prefix('admin')->group(function(){
    Route::match(['get', 'post'],'/', [Dashboard::class,'showDashboard'])->name('admin.dashboard');
});
Route::prefix('admin/product/register')->group(function(){
    Route::match(['get', 'post'],'/new',[CreateProduct::class,'showFormCreate'])->name('product.new');
    Route::post('/new/do',[CreateProduct::class,'new'])->name('product.new.do');
});
Route::prefix('admin/product')->group(function(){
    Route::match(['get','post'],'/list',[Dashboard::class,'showProductList'])->name('product.list');
    Route::post('/list/more',[Dashboard::class,'getMoreProducts'])->name('product.list.more');
});