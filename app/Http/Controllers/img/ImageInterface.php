<?php

namespace App\Http\Controllers\img;



interface ImageInterface 
{
    public function imageByForeignKey($productForeignKey);
}
