<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('evaluador');
            $table->string('evaluado');
            $table->integer('evaluadoID');
            $table->integer('mes');
            $table->integer('idPlantilla');
            $table->integer('preg1');
            $table->integer('preg2');
            $table->integer('preg3');
            $table->integer('preg4');
            $table->integer('preg5');
            $table->integer('preg6');
            $table->integer('preg7');
            $table->integer('preg8');
            $table->integer('preg9');
            $table->integer('preg10');
            $table->integer('preg11');
            $table->integer('preg12');
            $table->integer('preg13');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
