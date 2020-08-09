<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantillas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->integer('entrenador_id')->unsigned();
            $table->integer('jugador_id')->unsigned();
            $table->string('dorsal');
            $table->string('posicion');
            $table->timestamps();
            //relacion
            $table->foreign('entrenador_id')->references('id')->on('entrenadors')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('jugador_id')->references('id')->on('jugadors')
            ->onDelete('cascade')
            ->onUpdate('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantillas');
    }
}
