<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAskCommentReatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_comment_reating', function (Blueprint $table) {
            $table->id('idAsk_comment_reating');
            $table->timestamps();
            $table->bigInteger('idUser')->unsigned();
            $table->bigInteger('idComment_reating')->unsigned();
            $table->string('text');

            $table->foreign('idComment_reating')->references('idComment')->on('comment_reating');
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
        Schema::dropIfExists('ask_comment_reating');
    }
}
