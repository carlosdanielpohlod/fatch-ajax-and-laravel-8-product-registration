<?php

use App\Http\Controllers\auth\Login;
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
    Route::get('/', [Login::class,'showFormLogin'])->name('login.login');
    Route::post('/do',[Login::class,'login'])->name('login.do');
});
Route::match(['get', 'post'],'/painel', function(){
    return view('painel');
})->name('login.painel');