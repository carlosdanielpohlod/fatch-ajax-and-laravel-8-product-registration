<?php

use App\Http\Controllers\auth\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\Log;
use App\Http\Controllers\crudUser\CreateUser;
use App\Http\Controllers\products\CreateProduct;
use App\Http\Controllers\products\store\Buy;
use App\Models\Product;
use GuzzleHttp\Promise\Create;

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
    Route::get('/form', [Login::class,'showFormLogin'])->name('login.login');
    Route::post('/do',[Login::class,'login'])->name('login.do');
    Route::match(['get','post'],'/logout',[Login::class,'logout'])->name('login.logout');
    
    Route::get('/register/user',[CreateUser::class,'showRegisterForm'])->name('register.user.form');
    Route::post('/register/user/do',[CreateUser::class, 'new'])->name('register.user.do');
    Route::resource('/profilePic', CreateUser::class)->names('profilePic');
    // Route::post('teste',[CreateUser::class,'newTeste'])->name('teste');
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
    Route::get('/buy/checkout/form',[Buy::class,'showFormCheckout'])->name('product.checkout.form');
    Route::post('/buy/checkout/do',[Buy::class,'checkout'])->name('product.checkout.do');
    Route::post('/favorite/add', [Buy::class, 'addToFavorite'])->name('product.addToFavorite');
});
Route::get('/admin/log/teste/form', [Log::class,'formTeste'])->name('log.teste.form');
Route::post('/admin/log/teste/do', [Log::class,'teste'])->name('log.teste.do');