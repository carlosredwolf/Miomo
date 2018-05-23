<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->string('descripcion',50);
            $table->integer('sig_jornada');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            //Llaves foraneas
            $table->unsignedInteger('id_status');
            $table->foreign('id_status')->references('id')->on('cat__status');
            $table->unsignedInteger('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos');
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
        Schema::dropIfExists('jornadas');
    }
}
