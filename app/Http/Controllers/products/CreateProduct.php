<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Models\product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CreateProduct extends Controller
{
    public function showFormCreate(){
        if(Auth::check())
            return view('crudProduct.createProduct');
        else 
            return view('login.login');
    }
    public function new(Request $request){
        try{
            
            $product = new Product();
            $newProduct = $product->new($request);
            $response['success'] = true;
            
            $response['name'] = $newProduct->name;
            $response['price'] = $newProduct->price;
            echo json_encode($response);
            return ;
        }
        catch(Exception $exception){
            $response['success'] = false;
            $response['message'] = ''.$exception->getMessage().'';
            echo json_encode($response);
            return ;
        }
    }
}
