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
            $table->string('usuario',50);
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('proveedor_id');
            //DATOS DE LA FACTURA
            $table->date('fechaEmision');
            $table->date('fechaIngreso');
            $table->date('fechaVencimiento')->nullable();
            $table->string('numFactura');
            $table->string('numIngreso');
            $table->string('estadoPaga',1);//1=pagado, 0=no pagado
            //ESPECIFICACIONES DEL PRODUCTO COMPRA
            $table->integer('cantidadIngresada');
            $table->string('unidadMedida',1)->nullable();
            $table->decimal('PrecioUnitario',8,2);
            $table->decimal('PrecioTotal',8,2);
            $table->string('moneda',1);//1=Soles 2=Dolares

            $table->string('detalle',250)->nullable();
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
