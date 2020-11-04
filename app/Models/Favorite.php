<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Favorite extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $timestamps = false;
    public $table = 'favorite';
    public $fillable = ['id','idProduct','idUser'];
    public function new($data){
        $this->create([
            'idProduct' => $data['idProduct'],
            
            'idUser' => 1
        ]);
    }
}
