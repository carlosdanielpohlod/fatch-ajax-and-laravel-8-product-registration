<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LogUser extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $timestamps = false;
    public $table = 'loguser';
    public $fillable = ['id','log','time','idUser'];
    public function new($data){
        $this->create([
            'log' => $data['log'],
            'idUser' => Auth::user()->id
        ]);
    }
}
