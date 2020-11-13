<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_item extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    public $table = 'purchase_item';
    public $fillable = ['idPurchase','idProduct','idQuantity'];

}
