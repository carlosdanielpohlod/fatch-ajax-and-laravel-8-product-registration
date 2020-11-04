<?php

namespace App\Http\Controllers\products\store;

use App\Http\Controllers\Controller;
use App\Models\Cart;
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
            $product = Product::where('idProduct',$request['idProduct'])->first();

            $product_tags = Product_tag::select('tag.name','tag.id')
            ->join('tag','tag.id','product_tag.idTag')
            ->where('product_tag.idProduct',$request['idProduct'])->get();
           
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
    public function addToCart(Request $request){
        try{
            $cart = new Cart();
            // $cart 
            $cart->new($request);
            $response['success'] = true;
            return response()->json($response);
        }catch(Exception $exception){
            $response['success'] = false;
            return response()->json($response);
        }
    }
}
