<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productImage', function (Blueprint $table) {
            $table->id('idImage');
            // $table->timestamps();
            $table->string('url');
            $table->bigInteger('idProduct')->unsigned();
            $table->foreign('idProduct')->references('idProduct')->on('products');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_images');
    }
}
