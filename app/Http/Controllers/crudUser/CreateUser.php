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
    public function newTeste(Request $request){
        try{
            $newUser = new User();
            $newUser->new($request);
            echo $file = $request['profilePic'];
            echo $file->store('storage');
        }
        catch(Exception $excecao){
            echo $excecao;
        }
    }
    public function new(Request $request){
        
        try{
            $newUser = new User();
            $newUser->new($request);
            $response['success'] = true;
            // $response['name'] = $newUser->name;
            // $file = $request->file('profilePic');
            $response['error'] = 'mm';
            echo json_encode($response);
            return ;
        }
        catch(Exception $exception){
            $response['success'] = false;
            $response['error'] = $exception;
            
            echo json_encode($response);
            return ;
        }

    }
}
