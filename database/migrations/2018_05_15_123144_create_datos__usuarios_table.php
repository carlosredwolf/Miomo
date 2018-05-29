<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos__usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('apellidos',120);
            $table->date('fecha_nacimiento');
            $table->string('celular',20);

            $table->unsignedInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('cat__paises');
            $table->unsignedInteger('id_ciudad');
            $table->foreign('id_ciudad')->references('id')->on('cat__estados');

            $table->string('correo',120);
            //Comienzan los foreign key
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
             $table->unsignedInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('cat__usuarios');

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
        Schema::dropIfExists('datos__usuarios');
    }
}
