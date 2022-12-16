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
        Schema::create('detalle_devolucion_almacens', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('devolucion_id')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->integer('cantidadDevuelta');
            $table->string('unidadMedida', 1)->nullable();
            $table->decimal('precioDevolucion', 8, 2);
            $table->string('detalle',250)->nullable();
            $table->timestamps();

            $table->foreign('devolucion_id')->references('id')->on('devolucion_almacens');
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
        Schema::dropIfExists('detalle_devolucion_almacens');
    }
};
