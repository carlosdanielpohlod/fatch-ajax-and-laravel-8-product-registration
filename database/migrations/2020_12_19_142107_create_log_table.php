<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->id('idLog');
            $table->string('log');
            $table->timestamp('time');
            $table->biginteger('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');

            $table->biginteger('idTypeLog')->unsigned();
            $table->foreign('idTypeLog')->references('idTypeLog')->on('type_log');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log');
    }
}
