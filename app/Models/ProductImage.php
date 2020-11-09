<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    public $primaryKey = 'idImage';
    public $timestamps = false;
    public $table = 'productimage';
    public $fillable = ['idImage','url','idProduct'];

    public function productImage($idProduct){
        return $this->where('idProductImage',$idProduct)->get();
    }
}
