<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Preguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function(Blueprint $table)
    {
        $table->increments('id_preguntas');
        $table->integer('id_tipo_denuncia')->unsigned();
        $table->sttring('descripcion');
        $table->foreign('id_tipo_denuncia')->references('id_tipo_denuncia')->on('tipo_denuncia');
        
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
