<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    use HasFactory;
    public $primaryKey = 'idProductBrand';
    public $timestamps = false;
    public $table = 'productbrand';
    public $fillable = ['idProductBrand','name'];
}
