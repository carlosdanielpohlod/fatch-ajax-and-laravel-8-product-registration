<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User_purchase;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    public function store(Request $request){
        try{
            if(!Auth::check() ){
                if(! Auth::attempt(['email' => $request['email'],'password'=>$request['password']])){
                    return response()->json(['success'=>false,'msg'=>'Authentication failled']);
                }
            }
            $new_purchase = new User_purchase();
            $new_purchase->new($request);
            return response()->json(['success'=>true,'object'=>$new_purchase]);
        }catch(Exception $exception){
            return response()->json(['success'=>false,'except'=>$exception->getMessage()]);
        }
    }
}
