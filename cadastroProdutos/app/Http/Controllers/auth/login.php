<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    public static function showFormLogin(){
        return view('login.login');
    }
    public function login(Request $request){
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];
        if(Auth::attempt($credentials)){
            $login['success'] = true;
            echo json_encode($login);
            return ;
        }else{
            $login['success'] = false;
            $login['message'] = "Senha ou email inválidos";   
            return ;
        }
    }
}
