<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $primaryKey = 'idProduct';
    public $table = 'products';
    public $fillable = ['idProduct', 'name','price','idProvider'];
    public $timestamps = false;
    public function new($data){
        return $this->create([  
            'name' => $data['name'],
            'price' => $data['price'],
            'idProvider' => 1
        ]);
    }
    public function getBiggerThenId($id, $take){
        return $this->where('idProduct','>',$id)->take($take)->get();
    }
    public function product_tag(){
        return $this->hasMany(product_tag::class,'idProduct');
    }
}
