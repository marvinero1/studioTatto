<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_artista');
            $table->enum('rol', ['Tatuador', 'Especialista en piercings','Arte Corporal']);
            $table->string('facebook');
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('whatsapp');
            $table->string('telegram')->nullable();
            $table->string('image')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artistas');
    }
}
