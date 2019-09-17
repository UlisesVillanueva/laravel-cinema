<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('idpelicula')->unique();
            $table->string('titulo');
            $table->date('fechalanzamiento');
            $table->unsignedInteger('pais_id')->nullable();
            $table->integer('duracion');
            $table->longText('sinopsis');
            $table->unsignedInteger('clasificacion_id')->nullable();
            $table->unsignedInteger('genero_id')->nullable();
            $table->string('imagen');


            $table->foreign('pais_id')->references('idpais')->on('paises')->onDelete('set null');
            $table->foreign('clasificacion_id')->references('idclasificacion')->on('clasificaciones')->onDelete('set null');
            $table->foreign('genero_id')->references('idgenero')->on('generos')->onDelete('set null');


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
        Schema::dropIfExists('peliculas');
    }
}
