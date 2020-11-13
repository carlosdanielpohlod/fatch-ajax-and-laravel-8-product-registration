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
        DB::table('category')->insert([
            'name' => 'festa'
        ]);
        DB::table('category')->insert([
            'name' => 'punk'
        ]);
        DB::table('category')->insert([
            'name' => 'automotivo'
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
        
        for ($i = 1; $i < 200; $i ++){
            DB::table('products')->insert([
                
                'name' => 'produto '. $i,
                'price' => '23',
                'idProvider' => 1,
                'idCategory' => \random_int(1,6)
            ]);
        }
// 



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
        for($i = 0; $i < 40; $i++){
            DB::table('user_purchase')->insert([
                
                
                'idUser' => random_int(1,5)
            
            ]);
            
        }
        for($i = 0; $i < 300; $i++){
            DB::table('purchase_item')->insert([
                'idPurchase' => random_int(1,29),
                'idProduct' => random_int(1,199),
                'quantity' => 4
            ]);
        }
    }
}
