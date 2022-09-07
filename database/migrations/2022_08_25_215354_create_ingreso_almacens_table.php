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
        Schema::create('ingreso_almacens', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->date('fechaIngreso');
            $table->date('fechaVencimiento');
            $table->integer('numFactura');
            $table->integer('cantidadIngresada');
            $table->integer('PrecioTotal');
            $table->string('estadoPaga',1);//1=pagado, 0=no pagado
            $table->string('detalle',250);
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('productos');
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingreso_almacens');
    }
};
