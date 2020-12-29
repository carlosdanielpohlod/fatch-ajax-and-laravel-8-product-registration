<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statusPurchase', function (Blueprint $table) {
            $table->id('idStatusPurchase');
            $table->bigInteger('idPurchase')->unsigned();
            $table->foreign('idPurchase')->references('idPurchase')->on('user_purchase');
            $table->string('status',20);
            $table->string('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_purchase');
    }
}
