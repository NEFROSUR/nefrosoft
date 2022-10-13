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
        Schema::create('detalle_salida_almacens', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->string('guiaInterna',7);
            $table->unsignedBigInteger('salida_id');
            $table->unsignedBigInteger('product_id');
            //DATOS DEL PRODUCTO ENTREGADO
            $table->integer('cantidad');
            $table->string('um',7);
            $table->string('precioSalida')->nullable();;
            //DATOS ESPECIFICOS DEL USUARIO QUE USARA
            $table->string('destino',20);
            $table->string('observacion')->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('productos');
            $table->foreign('salida_id')->references('id')->on('salida_almacens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_salida_almacens');
    }
};
