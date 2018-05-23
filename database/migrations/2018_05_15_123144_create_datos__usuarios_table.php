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
            $table->string('celular',10);
            $table->string('ciudad',30);
            $table->string('pais',80);
            $table->string('correo',120);
            //Comienzan los foreign key
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users');
             $table->unsignedInteger('id_rol')->default(1);
            $table->foreign('id_rol')->references('id')->on('cat__usuarios');
           /* $table->unsignedInteger('id_tipo_usuario');
            $table->foreign('id_tipo_usuario')->references('id')->on('cat__usuarios');
            */$table->timestamps();
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
