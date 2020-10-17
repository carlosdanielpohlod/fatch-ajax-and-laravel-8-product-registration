<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Models\product;
use Exception;
use Illuminate\Http\Request;

class CreateProduct extends Controller
{
    public function showFormCreate(){
        return view('crudProduct.createProduct');
    }
    public function new(Request $request){
        try{
            
            $product = new Product();
            $product->new($request);
            $response['success'] = true;
            $response['message'] = 'Ocorreu um erro';
            echo json_encode($response);
            return ;
        }
        catch(Exception $exception){
            $response['success'] = false;
            $response['message'] = ''.$exception.'';
            echo json_encode($response);
            return ;
        }
    }
}
