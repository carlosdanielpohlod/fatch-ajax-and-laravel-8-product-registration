<?php

namespace App\Http\Controllers\img;



interface ImageInterface 
{
    public function getByForeignKey($productForeignKey);
    public function save($data, $id);
}
