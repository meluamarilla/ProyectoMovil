<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Respuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta', function(Blueprint $table)
    {
        $table->increments('id_respuesta');
        $table->integer('id_preguntas')->unsigned();
        $table->sttring('descripcion');
        $table->foreign('id_preguntas')->references('id_preguntas')->on('preguntas');
        
        //$table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
