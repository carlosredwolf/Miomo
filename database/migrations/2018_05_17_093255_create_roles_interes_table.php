<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesInteresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_interes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apostador',30)->nullable();
            $table->string('book',30)->nullable();
            $table->string('visitante',30)->nullable();
            $table->string('nombre_usuario');
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
        Schema::dropIfExists('roles_interes');
    }
}
