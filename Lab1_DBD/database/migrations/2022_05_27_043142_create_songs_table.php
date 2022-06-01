<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->string('fecha_subida');
            $table->string('duracion');
            $table->boolean('restriccion_edad');
            $table->integer('reproducciones');
            $table->date('fecha_creacion');
            $table->integer('id_genero')->nullable();
            $table->integer('id_pais')->nullable();
            $table->integer('id_album')->nullable();
            $table->foreign('id_genero')->references('id')->on('genres');
            $table->foreign('id_pais')->references('id')->on('locations');
            $table->foreign('id_album')->references('id')->on('albums');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
};
