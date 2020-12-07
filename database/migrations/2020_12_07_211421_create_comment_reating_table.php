<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentReatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_reating', function (Blueprint $table) {
            $table->id('idComment');
            $table->timestamps();
            $table->bigInteger('idReating')->unsigned();
            $table->string('comment');
            $table->foreign('idReating')->references('idReating')->on('reating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_reating');
    }
}
