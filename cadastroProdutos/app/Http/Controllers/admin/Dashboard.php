<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    
    public function showDashboard(){
        if(Auth::check()){
            $user = Auth::user();
            return view('admin.dashboard', compact('user'));
        }
        
    }
}
