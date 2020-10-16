<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    public function showFormLogin(){
        return view('login.login');
    }
    public function login(Request $request){
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];
        if(Auth::attempt($credentials)){
            echo "logado";
        }else{
            $login['sucess'] = false;
            $login['message'] = "Senha ou email inválidos";
            echo json_encode($login);
        }
    }
}
