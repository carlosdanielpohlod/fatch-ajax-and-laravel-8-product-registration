<?php

namespace App\Http\Controllers\products\store;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\machineLearning\Apriori_Suggest
use App\Http\Controllers\machineLearning\Apriori_Suggest;
use App\Http\Controllers\machineLearning\ClassificationProducts;
use App\Http\Controllers\machineLearning\HammingDistance;
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
    public function suggestProduct(Request $request){
        try{
            $products = [];
            
            $objSugest = new Apriori_Suggest();
            $sugest = $objSugest->suggestProduct($request['idProduct']);
            foreach($sugest as $i){
                $products[] = Product::select('idProduct','price','name')->where('idProduct',$i)->first();
            }
            $response['success'] = true;

            $response['products'] = $products;
            echo json_encode($response);
            return ;
        }catch(Exception $e){
            $response['error'] = true;
            $response['msg'] = $e->getMessage();
            echo json_encode($response);
            return ;
        }
    }
    public function teste(){
       $hamming = new HammingDistance();
       $array01 = [['tenis','sapato'],['bermuda','chinelo']];
       $array02 = [['tenis-sport','sapato'],['bermuda-jeans','sandalia']];
       $h = $hamming->distance($array01,$array02);
       echo json_encode($array01) . '</br></br>';
       echo json_encode($array02) . '</br></br>';
       echo json_encode($h);
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
