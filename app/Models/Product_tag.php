<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_tag extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $timestamps = false;
    public $table = 'product_tag';
    public $fillable = ['idProduct','idTag'];
    public function getProductTags($idProduct){
        return $this->select('tag.name','tag.id')
            ->join('tag','tag.id','product_tag.idTag')
            ->where('product_tag.idProduct',$idProduct)->get();
    }
}
