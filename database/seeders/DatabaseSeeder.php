<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
     {
        DB::table('users')->insert([
            'name' => 'Default User',
            'email' => 'email@example.com',
            'password' => Hash::make('12345'),
            'profilePic' => 'kkk'
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario 01',
            'email' => 'usuario@example.com',
            'password' => Hash::make('12345'),
            'profilePic' => 'kkk'
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario 02',
            'email' => 'usuario90@example.com',
            'password' => Hash::make('12345'),
            'profilePic' => 'kkk'
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario 03',
            'email' => 'usuario03@example.com',
            'password' => Hash::make('12345'),
            'profilePic' => 'kkk'
        ]);
        DB::table('users')->insert([
            'name' => 'Usuario 04',
            'email' => 'usuario02@example.com',
            'password' => Hash::make('12345'),
            'profilePic' => 'kkk'
        ]);
        DB::table('providers')->insert([
            'id' => 1,
            'name' => 'nome',
            'cnpj' => '9873'
        ]);

        $categorias = ['calcado' ,'camisa','camiseta' ,'relogio','shorts' ,'pulseira' ,'festa' ,'punk' ,'automotivo'  ,'eletrodomestico'];
        $tamCategorias = sizeof($categorias);
        for($i = 0; $i < $tamCategorias; $i ++){
            DB::table('category')->insert([
                'name' => $categorias[$i]
            ]);
        }
        
        
        $tags = ['Couro','Original','Natal','Lancamento','chinelo','rasteirinha','verao', 'inverno', 'a prova d agua','iphone','creme','country','Teen','Vintage','American','Importado','Escolar','Replica','Asiatico'];

        $tamTags = sizeof($tags);
        for($i = 0; $i < $tamTags; $i ++){
            DB::table('tag')->insert([
                'name' => $tags[$i]
            ]);
        }

        $marcaCalcados = ['Viamart','Coca cola','Umbro','Puma','Adidas','Nike','Olimpicus','Everlast','All star'];
        $marcaRoupas = [
        ' Chanel. Say Famous. ',
        'Gucci. Pinterest. ',
        'Burberry. FFW. ',
        'Dolce & Gabbana. Notibras. ',
        'Valentino. Social 1. ',
        'Zara. Flashmode. ',
        'Uniqlo. Incrível. ',
        'H&M. Portugal Textil',
        'Nike',
        'Addidas','Zaro','Cravo e Canela'];
        $marcas = array_merge($marcaCalcados, $marcaRoupas);
        for($i = 1; $i < sizeof($marcaCalcados); $i ++){
            DB::table('productBrand')->insert(
                ['name' => $marcaCalcados[$i]]

            );
            
        }       
        for($i = 1; $i < sizeof($marcaRoupas); $i ++){
            DB::table('productBrand')->insert(
                ['name' => $marcaRoupas[$i]]

            );
            
        }            
        
        $numBrands = sizeof($marcaCalcados) + sizeof($marcaRoupas);
        $numProducts = 100;
        for ($i = 1; $i < $numProducts; $i ++){
            $jaInseridos = [];
            $idCategoria = \random_int(1,$tamCategorias - 1);
            $idBrand = \random_int(1,$numBrands - 2);
            DB::table('products')->insert([
                
                'name' => ''.$categorias[$idCategoria] . $marcas[$idBrand],
                'price' => \random_int(50,500),
                'idProvider' => 1,
                'idCategory' => $idCategoria,
                'idProductBrand' => $idBrand
            ]);
            // $quantidade = \random_int(2,6);
            for($j = 1; $j < 4; $j++){
                $idTag = random_int(1,$tamTags - 1);
                while(in_array($idTag,$jaInseridos)){
                    $idTag = random_int(1,$tamTags - 1);
                }
                DB::table('product_tag')->insert([
                    'idProduct' => $i,
                    'idTag' => $idTag
                ]);
                if(!in_array($idTag,$jaInseridos))
                    $jaInseridos[] = $idTag;
            }
        }
// 
        for($i = 1; $i < $numProducts; $i ++){
            DB::table('storage')->insert(
                [
                    'idProduct' => $i,
                    'quantity' => \random_int(0,20)
                ]
            );
        }

        for($i = 1; $i < 20; $i++){
            DB::table('user_purchase')->insert([
                
                'idPurchase' => $i,
                'idUser' => random_int(1,5)
                
            ]);
            
            $products = [];
            $id = random_int(1,99);
            $products[] = $id;
            for($j = 0; $j < 5; $j++){
                while (in_array($id, $products)){
                    $id = random_int(1,99);
                }
                $products[] = $id;
                foreach($products as $product){
                    DB::table('purchase_item')->insert([
                        'idPurchase' => $i,
                        'idProduct' => $product,
                        'quantity' => 4
                    ]);
                }
            }
        }
        
    }
}
