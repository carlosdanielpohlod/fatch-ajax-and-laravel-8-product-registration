<?php

namespace App\Http\Controllers\machineLearning;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase_item;
use App\Models\User_purchase;
use Illuminate\Http\Request;
use Phpml\Association\Apriori;

class Apriori_Suggest extends Controller
{
    public function suggestProduct($id = 231){
       $dataPrepation = new DataPreparationController();
        // $samples = [['12','13','14','19'],['12','13','17','18'],['12','19','20','30','31'],['32','12','44','13']];
        $samples = [];
        $labels = [];
        
        $samples = $dataPrepation->userPurchaseItens($id);
      
        $associator = new Apriori($support = 0.5, $confidence = 0.5);
        $associator->train((array) $samples, (array) $labels);
        $apriori = $associator->apriori();
        // return 0;
        
        return $apriori[1];
        
        
    }
    public function suggestProductTeste($id = 231){
        $obj = new DataPreparationController();
        // $samples = [['12','13','14','19'],['12','13','17','18'],['12','19','20','30','31'],['32','12','44','13']];
        $samples = [];
        $labels = [];
        $samples = $obj->userPurchaseItens($id);
        
      
        $associator = new Apriori($support = 0.5, $confidence = 0.5);
        $associator->train((array) $samples, (array) $labels);
        $apriori = $associator->getRules();
        // return 0;
        
        echo json_encode($apriori);
        
        
    }
}
