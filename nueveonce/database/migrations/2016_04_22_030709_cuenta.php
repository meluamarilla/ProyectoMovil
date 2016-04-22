<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cuenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta', function(Blueprint $table)
    {
        $table->increments('id_cuenta');
        $table->string('nombre');
        $table->string('apellido');
        $table->integer('ci');
        $table->string('domicilio');
        $table->integer('telefono');
        $table->integer('dispositivo_id');
        $table->char('estado',1);
        
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
