<?php

namespace App\Http\Controllers\products\store;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\Product_tag;
use App\Models\User_purchase;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Buy extends Controller
{
    public function showFormCheckout(Request $request){
        if(Auth::check()){
            $objproduct_tag = new Product_tag();
            $product = Product::where('idProduct',$request['idProduct'])->first();

            $product_tags = $objproduct_tag->getProductTags($request['idProduct']);
           
            return view('store.formCheckout',compact('product','product_tags'));
        }else{
            return view('login.login');
        }
    }
    public function checkout(Request $request){
        $user_purchase = new User_purchase();
        $user_purchase->new($request);
        // Alert ::toast('Cadastrado','success');
        return back();
    }
    public function addToFavorite(Request $request){
        try{
            $favorite = new Favorite();
            // $favorite 
            $favorite->new($request);
            $response['success'] = true;
            return response()->json($response);
        }catch(Exception $exception){
            $response['success'] = false;
            return response()->json($response);
        }
    }
}
