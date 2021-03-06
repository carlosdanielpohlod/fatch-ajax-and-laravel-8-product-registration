<?php

namespace App\Http\Controllers\img;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public $imageManager;
    public function __construct($imageManager)
    {
        $this->imageManager = $imageManager;
    }
    public function getProductImages($idProduct){
        return $this->imageManager->getByForeignKey($idProduct);

    }
    public function new($data, $id){
        return $this->imageManager->save($data, $id);
    }
}
