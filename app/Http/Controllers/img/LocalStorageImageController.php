<?php

namespace App\Http\Controllers\img;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class LocalStorageImageController extends Controller implements ImageInterface
{
    public $productImage ;
    public function __construct(){
        $this->productImage = new ProductImage();
    }
    public function imageByForeignKey($productForeignKey)
    {
        return $this->productImage->productImage($productForeignKey);
    }
}
