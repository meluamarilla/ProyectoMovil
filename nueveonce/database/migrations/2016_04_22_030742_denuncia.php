<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Denuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia', function(Blueprint $table)
    {
        $table->increments('id_denuncia');
        $table->integer('id_cuenta')->unsigned();
        $table->integer('id_tipo')->unsigned();
        $table->timestamps('fecha');
        $table->char('veracidad',1);
        $table->foreign('id_cuenta')->references('id_cuenta')->on('cuenta');
        $table->foreign('id_tipo')->references('id_tipo_denuncia')->on('tipo_denuncia');
        
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
