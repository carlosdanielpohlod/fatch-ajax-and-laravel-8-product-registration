<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $primaryKey = 'idProduct';
    public $table = 'products';
    public $fillable = ['idProduct', 'name','price'];
    public $timestamps = false;
    public function new($data){
        return $this->create([  
            'name' => $data['name'],
            'price' => $data['price']
        ]);
    }
}
