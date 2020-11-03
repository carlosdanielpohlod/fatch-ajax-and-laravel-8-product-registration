<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_purchase', function (Blueprint $table) {
            $table->id('idPurchase');
            // $table->timestamps();
            $table->biginteger('idProduct')->unsigned();
            $table->biginteger('idUser')->unsigned();
            $table->foreign('idProduct')->references('idProduct')->on('products');
            $table->foreign('idUser')->references('id')->on('users');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_purchase');
    }
}
