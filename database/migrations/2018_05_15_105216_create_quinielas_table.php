<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuinielasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quinielas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aciertos')->nullable();
            $table->integer('puntaje')->nullable();
            //Comienzan llaves foraneas
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->unsignedInteger('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->unsignedInteger('id_jornada');
            $table->foreign('id_jornada')->references('id')->on('jornadas');
            $table->unsignedInteger('id_status');
            $table->foreign('id_status')->references('id')->on('cat__status');
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
        Schema::dropIfExists('quinielas');
    }
}
