<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    
    public function showDashboard(){
        if(Auth::check()){
            $user = Auth::user();
            return view('admin.dashboard', compact('user'));
        }
        
    }
    public function showProductList(){
        if(Auth::check()){
            $product = new Product();
            $products = product::all();
            $products= json_encode( $products, JSON_HEX_QUOT|JSON_HEX_APOS );

            return view('admin.viewProducts',compact('products'));
        }
    }
    public function getMoreProducts(Request $request){
        if(Auth::check()){

        }
    }
}
