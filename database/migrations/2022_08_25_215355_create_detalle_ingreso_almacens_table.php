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
        Schema::create('detalle_ingreso_almacens', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->unsignedBigInteger('factura_id')->nullable();
            $table->unsignedBigInteger('product_id');
            //ESPECIFICACIONES DEL PRODUCTO COMPRA
            $table->integer('cantidadIngresada');
            $table->string('unidadMedida', 1)->nullable();
            $table->decimal('PrecioUnitario', 8, 2);
            $table->decimal('PrecioTotal', 8, 2);
            $table->string('moneda', 1); //1=Soles 2=Dolares
            $table->string('detalle',250)->nullable();
            $table->timestamps();

            $table->foreign('factura_id')->references('id')->on('ingreso_almacens');
            $table->foreign('product_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ingreso_almacens');
    }
};
