<?php

namespace App\Http\Controllers\machineLearning;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase_item;
use App\Models\User_purchase;
use Illuminate\Http\Request;
use Phpml\Association\Apriori;

class Apriori_Cart extends Controller
{
    public function suggestProduct(){
        $samples = [];
        $cart = User_purchase::select('user_purchase.idPurchase')
        ->join('purchase_item','purchase_item.idPurchase','user_purchase.idPurchase')
        ->where('purchase_item.idProduct',1)->get();

        foreach($cart as $item){
            
            $aux = Purchase_item::select('purchase_item.idProduct')
            ->join('user_purchase','user_purchase.idPurchase','purchase_item.idPurchase')
            ->where('purchase_item.idPurchase',$item['idPurchase'])
            ->get();
            array_push($samples, $aux);
            echo $aux;
        }
        // print_r($samples);
        
        // $labels = [];
        
        // $associator = new Apriori($support = 0.5, $confidence = 0.5);
        //  $associator->train($samples, $labels);
        // $associator->getRules();
    }
}
