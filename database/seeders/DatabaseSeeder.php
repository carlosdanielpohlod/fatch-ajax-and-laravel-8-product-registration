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
        DB::table('category')->insert([
            'name' => 'calçado'
        ]);
        DB::table('category')->insert([
            'name' => 'camisa'
        ]);
        DB::table('category')->insert([
            'name' => 'camiseta'
        ]);
        DB::table('category')->insert([
            'name' => 'relogio'
        ]);
        DB::table('category')->insert([
            'name' => 'shorts'
        ]);
        DB::table('category')->insert([
            'name' => 'pulseira'
        ]);
        DB::table('tag')->insert(
        ['id'=> 1,'name' => 'sapato']);
        DB::table('tag')->insert(
        ['name' => 'trilha']);
        DB::table('tag')->insert(
        ['name' => 'esporte']);
        DB::table('tag')->insert(
        ['name' => 'praia']);
        DB::table('tag')->insert(
            ['name' => 'chinelo']);
        DB::table('tag')->insert(
            ['name' => 'rasteirinha']);
        DB::table('tag')->insert(
            ['name' => 'verão']);
        DB::table('tag')->insert(
                ['name' => 'inverno']);
        DB::table('tag')->insert(
            ['name' => 'viamarte']);
        DB::table('tag')->insert(
            ['name' => 'all star']);
            DB::table('tag')->insert(
                ['name' => 'a prova d agua']);
        DB::table('products')->insert([
            'idProduct' => 3,
            'name' => 'product default',
            'price' => '23',
            'idProvider' => 1,
            'idCategory' => 1
        ]);
        DB::table('products')->insert([
            'idProduct' => 1,
            'name' => 'produto 2',
            'price' => '23',
            'idProvider' => 1,
            'idCategory' => 2
        ]);
        DB::table('products')->insert([
            'idProduct' => 2,
            'name' => 'produto 3',
            'price' => '23',
            'idProvider' => 1,
            'idCategory' => 3
        ]);
        DB::table('products')->insert([
            'idProduct' => 4,
            'name' => 'produto 4',
            'price' => '23',
            'idProvider' => 1,
            'idCategory' => 4
        ]);
        DB::table('products')->insert([
            'idProduct' => 5,
            'name' => 'produto 5',
            'price' => '23',
            'idProvider' => 1,
            'idCategory' => 2
        ]);
        DB::table('products')->insert([
            'idProduct' => 6,
            'name' => 'produto 6',
            'price' => '23',
            'idProvider' => 1,
            'idCategory' => 3
        ]);
        DB::table('products')->insert([
            'idProduct' => 7,
            'name' => 'produto 7',
            'price' => '23',
            'idProvider' => 1,
            'idCategory' => 2
        ]);


// 
DB::table('products')->insert([
    'idProduct' => 8,
    'name' => 'product 8',
    'price' => '23',
    'idProvider' => 1,
    'idCategory' => 2
]);
DB::table('products')->insert([
    'idProduct' => 9,
    'name' => 'produto 9',
    'price' => '23',
    'idProvider' => 1,
    'idCategory' => 1
]);
DB::table('products')->insert([
    'idProduct' => 10,
    'name' => 'produto 3',
    'price' => '23',
    'idProvider' => 1,
    'idCategory' => 5
]);
DB::table('products')->insert([
    'idProduct' => 11,
    'name' => 'produto 4',
    'price' => '23',
    'idProvider' => 1,
    'idCategory' => 1
]);
DB::table('products')->insert([
    'idProduct' => 12,
    'name' => 'produto 5',
    'price' => '23',
    'idProvider' => 1,
    'idCategory' => 4
]);
DB::table('products')->insert([
    'idProduct' => 13,
    'name' => 'produto 6',
    'price' => '23',
    'idProvider' => 1,
    'idCategory' => 1
]);
DB::table('products')->insert([
    'idProduct' => 14,
    'name' => 'produto 7',
    'price' => '23',
    'idProvider' => 1,
    'idCategory' => 2
]);




        DB::table('product_tag')->insert([
            'idProduct' => 1,
            'idTag' => 1
        ]);
        DB::table('product_tag')->insert([
            'idProduct' => 2,
            'idTag' => 1
        ]); 
        DB::table('product_tag')->insert([
            'idProduct' => 3,
            'idTag' => 3
        ]);

        DB::table('user_purchase')->insert([
            'idPurchase' => 1,
            'idUser' => 1,
        
        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 1,
            'idProduct' => 1,
            'quantity' => 4
        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 1,
            'idProduct' => 2,
            'quantity' => 2

        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 1,
            'idProduct' => 3,
            'quantity' => 4
        ]);


        DB::table('user_purchase')->insert([
            'idPurchase' => 2,
            'idUser' => 3,
        
        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 2,
            'idProduct' => 3,
            'quantity' => 4
        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 2,
            'idProduct' => 5,
            'quantity' => 2

        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 2,
            'idProduct' => 7,
            'quantity' => 4
        ]);



        DB::table('user_purchase')->insert([
            'idPurchase' => 3,
            'idUser' => 4,
        
        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 3,
            'idProduct' => 1,
            'quantity' => 4
        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 3,
            'idProduct' => 8,
            'quantity' => 2

        ]);
        DB::table('purchase_item')->insert([
            'idPurchase' => 3,
            'idProduct' => 7,
            'quantity' => 4
        ]);

    }
}
