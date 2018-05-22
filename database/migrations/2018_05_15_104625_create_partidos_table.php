<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score_local')->nullable();
            $table->integer('score_visitante')->nullable();
            $table->string('hora_partido');
            $table->date('fecha_partido');
            //Empiezan llaves foraneas
            $table->unsignedInteger('id_jornada');
            $table->foreign('id_jornada')->references('id')->on('jornadas');
            $table->unsignedInteger('id_grupo');
            $table->foreign('id_grupo')->references('id')->on('grupos');
            $table->unsignedInteger('id_local');
            $table->foreign('id_local')->references('id')->on('equipos');
            $table->unsignedInteger('id_visitante');
            $table->foreign('id_visitante')->references('id')->on('equipos');
            $table->unsignedInteger('id_resultado');
            $table->foreign('id_resultado')->references('id')->on('cat__resultados');
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
        Schema::dropIfExists('partidos');
    }
}
