<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Http\Controllers\img\ImageController;
use App\Http\Controllers\img\LocalStorageProductImageController;
use App\Models\product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CreateProduct extends Controller
{
    public $fileController;
    
    public function __construct()
    {
        $method = new LocalStorageProductImageController();
        $this->fileController =new ImageController($method);
    }
    
    public function new(Request $request){
        try{
            
            $product = new Product();
            $newProduct = $product->new($request);
            $this->fileController->new($request);
            
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
    public function showFormCreate(){
        if(Auth::check())
            return view('crudProduct.createProduct');
        else 
            return view('login.login');
    }
}
