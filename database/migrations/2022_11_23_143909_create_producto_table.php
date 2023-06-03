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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->text('nombre');
            $table->string('codigo_referencia');
            $table->string('ubicacion_bodega');
            $table->string('porcentaje_descuento'); 
            $table->string('precio_final');
            $table->text('descripcion_modelo');
            $table->integer('publicado')->default(1);
            $table->integer('outlet')->default(1);
            $table->foreignId('subcategoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('coleccion_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};



