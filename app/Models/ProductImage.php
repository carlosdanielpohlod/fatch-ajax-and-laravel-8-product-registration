<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    private $primaryKey = 'idImage';
    private $timestamps = false;
    private $table = 'productimage';
    private $fillable = ['idImage','url','idProduct'];

    public function productImage($idProduct){
        return $this->where('idProductImage',$idProduct)->get();
    }
}
