<?php

use App\Http\Controllers\auth\login;
use Illuminate\Support\Facades\Route;

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
    Route::get('/', [login::class,'showFormLogin'])->name('login.login');
    Route::post('/do',[login::class,'login'])->name('login.do');
});