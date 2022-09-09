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
        Schema::create('salida_almacens', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
           // $table->unsignedBigInteger('product_id_salida');
            $table->date('fechaSalida');
            $table->integer('numSalida');
            $table->string('reponsable',50);
            $table->integer('cantidad');
            $table->string('precioUnidad');
            $table->string('areaDestino',15);
            $table->string('recepcionista',50);
            $table->string('objetivoP',50);
            $table->string('detalle');
            $table->timestamps();

            //$table->foreign('product_id_salida')->references('id')->on('inventarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salida_almacens');
    }
};
