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
            $table->biginteger('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');   
            $table->date('dataPurchase')->nullable();
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
