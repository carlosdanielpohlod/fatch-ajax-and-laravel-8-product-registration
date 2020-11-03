<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_tag extends Model
{
    use HasFactory;
    private $primaryKey = 'id';
    private $timestamps = false;
    private $table = 'product_tag';
    private $fillable = ['idProduct','idTag'];
}
