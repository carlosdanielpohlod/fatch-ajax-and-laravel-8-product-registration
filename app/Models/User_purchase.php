<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_purchase extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $timestamps = false;
    public $table = 'user_purchase';
    public $fillable = ['idPurchase','idProduct','idUser','quantity'];
    // public function __construct()
    // {   
    //     if(! Auth::check()){
            
    //         return response()->json(['error' => 'you does not logged in']);
    //     }
        
    // }
    public function new($data)
    {
        return $this->create([
            'idProduct' => $data['idProduct'],
            'idUser' =>  Auth::user()->id,
            'quantity' => $data['quantity']
        ]);
    }
}
