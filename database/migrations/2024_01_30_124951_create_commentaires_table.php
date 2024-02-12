<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('auteur_id');
            $table->text('contenu');
            $table->timestamp('date_publication');
            $table->string('statut');
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('auteur_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
