<?php

namespace App\Http\Controllers\CrudUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CreateUser extends Controller
{
    public function showRegisterForm(){
        return view('crudUser.registerForm');
    }
    public function new(Request $request){
        $newUser = new User();
        $newUser->new($request);
    }
}
