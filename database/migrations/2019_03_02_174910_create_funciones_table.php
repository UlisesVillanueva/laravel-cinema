<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funciones', function (Blueprint $table) {
            $table->increments('idfuncion')->unique();
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedInteger('sala_id')->nullable();
            $table->unsignedInteger('pelicula_id')->nullable();


            $table->foreign('sala_id')->references('idsala')->on('salas')->onDelete('set null');
            $table->foreign('pelicula_id')->references('idpelicula')->on('peliculas')->onDelete('set null');
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
        Schema::dropIfExists('funciones');
    }
}
