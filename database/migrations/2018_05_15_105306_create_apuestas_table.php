<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apuestas', function (Blueprint $table) {
            $table->increments('id');
            //Comienzan llaves foraneas
            $table->unsignedInteger('id_quiniela');
            $table->foreign('id_quiniela')->references('id')->on('quinielas');
            $table->unsignedInteger('id_partido');
            $table->foreign('id_partido')->references('id')->on('partidos');
            $table->unsignedInteger('id_resultado');
            $table->foreign('id_resultado')->references('id')->on('cat__resultados');
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
        Schema::dropIfExists('apuestas');
    }
}
