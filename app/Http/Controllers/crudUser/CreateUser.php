<?php

namespace App\Http\Controllers\CrudUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class CreateUser extends Controller
{
    public function showRegisterForm(){
        return view('crudUser.registerForm');
    }
    public function new(Request $request){
        echo "aaa";
        try{
            $newUser = new User();
            $newUser->new($request);
            $response['success'] = true;
            $response['name'] = $newUser->name;
            echo json_encode($response);
            return ;
        }
        catch(Exception $exception){
            $response['success'] = false;
            $response['error'] = $exception;
            echo $exception;
            echo json_encode($response);
            return ;
        }

    }
}
