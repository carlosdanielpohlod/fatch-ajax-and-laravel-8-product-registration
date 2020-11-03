<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LogUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Log extends Controller
{
    public function formTeste(){
        if(Auth::check())
            return view('admin.actionMonitoring');
        else
            return view('login.login');
    }
    public function teste(Request $request){
        $newLog = new LogUser();
        try{
            $newLog->create([
                'log' => $request['log'],
                'idUser' => Auth::user()->id
            ]);
            $response['success'] = true;
        }catch(Exception $exception){
            $response['success'] = false;
            // $response['info'] = $request['log'];
            $response['error'] = $exception->getMessage();
        }
        echo json_encode($response);
        return ;
    }
}
