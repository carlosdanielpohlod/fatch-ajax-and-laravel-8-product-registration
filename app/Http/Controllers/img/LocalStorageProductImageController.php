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
        $this->path =  'product';
    }

    public function getByForeignKey($productForeignKey)
    {
        return $this->productImage->productImage($productForeignKey);
    }

    public function save($data){
        $file = $data->file('productImage');
        
        $fillable = ['url' => $file->store($this->path.'/'.$data['idProduct']),'idProduct' => $data['idProduct']];
        $this->productImage::create($fillable);
    }
}
