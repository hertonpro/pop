<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('contenu');
            $table->text('resume');
            $table->unsignedBigInteger('auteur_id');
            $table->timestamp('date_publication')->nullable();
            $table->unsignedBigInteger('categorie_id');
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->string('video_link')->nullable();
            $table->string('statut');
            $table->timestamps();

            $table->foreign('auteur_id')->references('id')->on('users');
            $table->foreign('categorie_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
