<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funcionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function(Blueprint $table)
    {
        $table->increments('id_funcionario');
        $table->string('nombre');
        $table->string('apellido');
        $table->string('rango');
        $table->string('direccion');
        $table->integer('telefono');
        $table->integer('ci');
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
