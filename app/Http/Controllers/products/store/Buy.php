<?php

namespace App\Http\Controllers\products\store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User_purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Buy extends Controller
{
    public function showFormCheckout(Request $request){
        if(Auth::check()){
            $product = Product::where('idProduct',1)->first();

            return view('store.formCheckout',compact('product'));
        }else{
            return view('login.login');
        }
    }
    public function checkout(Request $request){
        $user_purchase = new User_purchase();
        
    }
}
