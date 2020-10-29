<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiError;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    public function __construct(Product $product)
    {
        $this->product = $product;   
    }
    public function index(){
        return response()->json([$this->product->paginate(5)]);
    }
    public function show(Product $id){
        return response()->json(['data'=>$id]);
    }
    public function store(Request $request){
        try{
            $productData = $request->all();
            $this->product->create($productData);
            return response()->json(['msg'=> 'Product has been created'],201);
        }
        catch(Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação',1010));
        }
    }
    public function update(Request $request, $id){
        try{
            $productData = $request->all();
            $product = $this->product->find($id);
            $product->update($productData);
            return response()->json(['msg'=> 'Product has been updated'],201);
        }
        catch(Exception $e){
            if(config('app.debug')){
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação',1010));
        }
    }
}
