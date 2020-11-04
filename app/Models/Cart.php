<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $timestamps = false;
    public $table = 'cart';
    public $fillable = ['id','idProduct','quantity','idUser'];
    public function new($data){
        $this->create([
            'idProduct' => $data['idProduct'],
            'quantity' => 1,
            'idUser' => 1
        ]);
    }
}
