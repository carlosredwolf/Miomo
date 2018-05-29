<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('comentarios',100);
            //Comienzan llaves foraneas
            $table->unsignedInteger('id_anfitrion');
            $table->foreign('id_anfitrion')->references('id')->on('paises');
            $table->unsignedInteger('id_ganador');
            $table->foreign('id_ganador')->references('id')->on('equipos');
            $table->unsignedInteger('id_finalista');
            $table->foreign('id_finalista')->references('id')->on('equipos');
            $table->unsignedInteger('id_status');
            $table->foreign('id_status')->references('id')->on('cat__status');
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
        Schema::dropIfExists('eventos');
    }
}
