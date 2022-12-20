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
            $table->unsignedBigInteger('proveedor_id');
            //DATOS DE LA FACTURA
            $table->date('fechaEmision');
            $table->date('fechaIngreso');
            $table->date('fechaVencimiento')->nullable();
            $table->string('numFactura');
            $table->string('numIngreso');
            $table->string('estadoPaga',1);//1=pagado, 0=no pagado
            $table->decimal('total', 8, 5)->nullable();
            $table->string('detalle',250)->nullable();
            $table->timestamps();
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
