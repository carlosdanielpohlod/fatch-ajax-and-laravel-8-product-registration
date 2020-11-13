<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_item', function (Blueprint $table) {
            $table->bigInteger('idPurchase')->unsigned();
            $table->biginteger('idProduct')->unsigned();  
            $table->integer('quantity');
            $table->foreign('idProduct')->references('idProduct')->on('products');
            $table->foreign('idPurchase')->references('idPurchase')->on('user_purchase');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_item');
    }
}
