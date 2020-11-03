<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    private $primaryKey = 'id';
    private $timestamps = false;
    private $table = 'tag';
    private $fillable = ['id','name'];
}
