<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Exception;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        // try{
        //     $cart = new Cart();
        //     $cart->new($request);
        //     echo json_encode(['success'=>true]);
        //     return ;
        // }catch(Exception $exception){
        //     echo json_encode(['success'=>false,'error'=>$exception->getMessage()]);
        //     return ;
        // }
    }
}
