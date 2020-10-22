<?php

namespace App\Http\Controllers\CrudUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateUser extends Controller
{
    public function showRegisterForm(){
        return view('crudUser.registerForm');
    }
    public function new(Request $request){

    }
}
