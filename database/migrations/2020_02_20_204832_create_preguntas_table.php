<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('pregunta1');
            $table->text('pregunta2');
            $table->text('pregunta3');
            $table->text('pregunta4');
            $table->text('pregunta5');
            $table->text('pregunta6');
            $table->text('pregunta7');
            $table->text('pregunta8');
            $table->text('pregunta9');
            $table->text('pregunta10');
            $table->text('pregunta11');
            $table->text('pregunta12');
            $table->text('pregunta13');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
