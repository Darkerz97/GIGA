<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('Equipos',function(Blueprint $table){

            $table->id();
            $table->string('folio');
            $table->string('cliente');
            $table->string('locacion');
            $table->string('equipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('n de serie');
            $table->string('fecha de ingreso');
            $table->string('vendedor');
            $table->string('prioridad');
            $table->string('diagnostico inicial');
            $table->timestamp('fecha de modificacion');
            $table->string('ingeniero');
            $table->string('estatus');
            $table->string('garantia');
            $table->string('comentarios');
            $table->timestamp('fecha de salida');
            $table->integer('horas invertidas');
            $table->string('ubicacion') ('char');
            $table->timestamp('fecha de diagnostico');
            $table->string('reporte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists ('Equipos');
    }
};
