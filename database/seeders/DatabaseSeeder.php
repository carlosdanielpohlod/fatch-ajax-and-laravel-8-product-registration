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
        DB::table('providers')->insert([
            'id' => 1,
            'name' => 'nome',
            'cnpj' => '9873'
        ]);
        DB::table('tag')->insert(
        ['id'=> 1,'name' => 'sapato']);
        DB::table('tag')->insert(
        ['name' => 'trilha']);
        DB::table('tag')->insert(
        ['name' => 'esporte']);
        DB::table('tag')->insert(
        ['name' => 'praia']);
        DB::table('products')->insert([
            'idProduct' => 100,
            'name' => 'product default',
            'price' => '23',
            'idProvider' => 1
        ]);
        DB::table('product_tag')->insert([
            'idProduct' => 100,
            'idTag' => 1
        ]);
            
        
    }
}
