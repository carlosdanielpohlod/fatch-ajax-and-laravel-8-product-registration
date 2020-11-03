<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_purchase extends Model
{
    use HasFactory;
    private $primaryKey = 'id';
    private $timestamps = false;
    private $table = 'user_purchase';
    private $fillable = ['idPurchase','idProduct','idUser','quantity'];
    public function new($data)
    {
        $this->create([
            'idProduct' => $data['idProduct'],
            'idUser' => Auth::user()->idUser,
            'quantity' => $data['quantity']
        ]);
    }
}
