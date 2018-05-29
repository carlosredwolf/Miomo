<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat__estados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ubicacionpaisid');
            $table->foreign('ubicacionpaisid')->references('id')->on('cat__paises');
            $table->string('estadonombre',100);
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
        Schema::dropIfExists('cat__estados');
    }
}
