<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenadors', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->string('documento');
            $table->integer('nacionalidad_id')->unsigned();
            $table->timestamps();
            //relacion
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidads')
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
        Schema::dropIfExists('entrenadors');
    }
}
