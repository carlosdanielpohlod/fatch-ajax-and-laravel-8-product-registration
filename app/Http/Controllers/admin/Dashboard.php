<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    
    public function showDashboard(){
        if(Auth::check()){
            $user = Auth::user();
            $products = Product::all();
            $products = json_encode($products);
            return view('admin.dashboard', compact('user','products'));
        }
        
    }
    
    public function showProductList(){
        if(Auth::check()){
            $product = new Product();
            $products = product::all();
            
            $products= json_encode( $products, JSON_HEX_QUOT|JSON_HEX_APOS );
            // echo $products;
            return view('admin.viewProducts',compact('products'));
        }else{
            return view('login.login');
        }
    }
    public function getMoreProducts(Request $request){
        if(Auth::check()){
            try{
                $product = new Product();
                $products = $product->getBiggerThenId($request['index'],$request['take']);
                $response['success'] = true;
                $response['products'] = $products;
                echo json_encode($response);
                return ;
            }
            catch(Exception $exception){
                $response['success'] = false;
                $response['error'] = $exception;
                echo json_encode($response);
                return ;
            }
        }else{
            return view('login.login');
        }
    }
}
