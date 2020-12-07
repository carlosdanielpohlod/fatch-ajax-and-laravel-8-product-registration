<?php

namespace App\Http\Controllers\machineLearning;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_tag;
use App\Models\ProductBrand;
use App\Models\Purchase_item;
use App\Models\User_purchase;
use Illuminate\Http\Request;

class DataPreparationController extends Controller
{
    public function removerChavesRepetidas($data){
        $chaveAnterior = '';
        $chave = '';
        $array = [];
        $tags = [];
        $chave = $data['idProduct'][0];
        foreach($data as $a){
            
            if($a['idProduct'] == $chave)
                $tags[] = $a['tag'];
            else{
                $array[$a['idProduct']] = $tags;
                $tags = [];
            }
            $chave = $a['idProduct'];
        }
    }
    public function userPurchaseItens($id){
        $samples = [];
        $cart = User_purchase::select('user_purchase.idPurchase')
        ->join('purchase_item','purchase_item.idPurchase','user_purchase.idPurchase')
        ->where('purchase_item.idProduct',$id)->get();
        
        foreach($cart as $item){
            $aux = Purchase_item::select('purchase_item.idProduct')
            ->join('user_purchase','user_purchase.idPurchase','purchase_item.idPurchase')
            ->where('purchase_item.idPurchase',$item['idPurchase'])
            ->get();
            foreach($aux as $a){
                $linha[] = (string) $a['idProduct'];
            }
          
            $samples[] = $linha;
        }
        return $samples;
    }


    public function associatedInfos($data){
        if(count($data) > 0){
            foreach($data as $d){
                $tags = Product_tag::select('tag.id')->where('idProduct',$d['idProduct'])
                ->join('tag','tag.id','product_tag.idTag')
                ->get();
                $aux = [];
                foreach($tags as $tag){
                    $aux[] = $tag['id'];
                }
                $brand = ProductBrand::select('name')->where('idProductBrand', $d['idProductBrand']) -> first();
                
                $samples[ $d['idProduct'] ]['tag'] = $aux;
                $samples[$d['idProduct']]['price'] = $d['price'];
                $samples[$d['idProduct']]['productBrand'] = $brand['name'];
                $samples[$d['idProduct']]['id'] = $d['idProduct'];
                $samples[$d['idProduct']]['category'] = $d['name'];


            }
            return $samples;
        }
    }
}
