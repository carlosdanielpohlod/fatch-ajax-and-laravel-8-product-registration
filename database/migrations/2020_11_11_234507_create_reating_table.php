<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reating', function (Blueprint $table) {
            $table->id('idReating');
            $table->integer('evaluation');
            $table->bigInteger('idProduct')->unsigned();
            $table->bigInteger('idUser')->unsigned();
            $table->timestamp('date');

            $table->foreign('idProduct')->references('idProduct')->on('products');
            $table->foreign('idUser')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reating');
    }
}
