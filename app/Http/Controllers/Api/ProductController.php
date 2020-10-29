<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
        $productData = $request->all();
        $this->product->create($productData);
    }
}
