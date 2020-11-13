<?php

namespace App\Http\Controllers\img;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;

use Illuminate\Support\Facades\Auth;

class LocalStorageProductImageController extends Controller implements ImageInterface
{
    public $productImage ;
    public $path;
    public function __construct(){
        $this->productImage = new ProductImage();
        
    }

    public function getByForeignKey($productForeignKey)
    {
        return $this->productImage->productImage($productForeignKey);
    }

    public function save($data, $id){
        $file = $data->file('productImage');
        
        $fillable = ['url' => $file->store($this->path.'/'.$id),'idProduct' => $id];
        $this->productImage::create($fillable);
    }
}
