<?php

namespace App\Http\Controllers\machineLearning;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_tag;
use Exception;
use Illuminate\Http\Request;
use Phpml\Clustering\KMeans;

class ClassificationProducts extends Controller
{
    
    public function teste($id){
        
        $obj = new DataPreparationController();
        // $categories = Category::select('idCategory')->get();
        // foreach($categories as $category){
            $samples = [];            
            $data  = Product::select('products.idProduct','category.name','products.price','product_tag.idTag','products.idProductBrand')
            ->leftjoin('product_tag','product_tag.idProduct','products.idProduct')
            ->leftjoin('category', 'category.idCategory','products.idCategory')
            ->where('products.idCategory',$id)
            ->get();    
            
            // echo 'Numero de Registros: '. count($data) .'</br></br>';
           
            // echo json_encode($data);
            $samples = $obj->associatedInfos($data);
            
            
        
        echo json_encode($samples);
    }
    public function getSemelhantes($id = 1){
        $data = new DataPreparationController();
        $samples = [];
        $tags = [];
        $products = Product::where('idCategory', $id) -> get();
        $samples = $data->associatedInfos($products);
        foreach($samples as $product){
            $tags[] = $product['tag'];
            
        }
        // $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
        $labels = ['a', 'a', 'a', 'b', 'b', 'b'];

        $classifier = new KMeans(2);
        $classifier->train($tags, $labels);

        $classifier->predict([3, 2]);
    }

    
}
