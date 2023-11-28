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
        Schema::create('Componentes',function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string('descripcion');
            $table->string('componente');
            $table->string('caracteristicas');
            $table->string('Numero_de_parte');
            $table->string('Proveedor');
            $table->integer('cantidad');
            $table->string('ubicacion');
            $table->string('usado');
            $table->string('orden_de_compra');
            $table->float('costo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists ('Componentes');
    }
};
