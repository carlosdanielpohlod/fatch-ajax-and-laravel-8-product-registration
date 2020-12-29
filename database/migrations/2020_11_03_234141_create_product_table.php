<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('idProduct');
            $table->string('name');
            $table->float('price');
            
            $table->biginteger('idProvider')->unsigned();
            $table->bigInteger('idCategory')->unsigned();
            $table->bigInteger('idProductBrand')->unsigned();

            $table->foreign('idProvider')->references('id')->on('providers');
            $table->foreign('idCategory')->references('idCategory')->on('category');
            $table->foreign('idProductBrand')->references('idProductBrand')->on('productBrand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
