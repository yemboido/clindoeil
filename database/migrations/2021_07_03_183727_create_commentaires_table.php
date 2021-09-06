<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
           
            $table->text('commentaire');
           
            $table->timestamps();

            $table->foreignId('article_id')->reference('id')->on('articles')->nullable();
            $table->foreignId('user_id')->reference('id')->on('users');
            $table->foreignId('reply_to')->reference('id')->on('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
