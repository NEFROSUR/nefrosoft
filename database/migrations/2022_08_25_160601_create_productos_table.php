<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

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
            $table->id('id')->autoincrement();
            $table->char('codigoProd',5)->unique();
            $table->char('nombreProd',50);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->char('marcaProd',50);
            $table->char('unidadMedidaProd',20);//
            $table->char('um',7);
            $table->char('precioUnitarioProd',10);
            $table->char('tipoMoneda',1);//SOLES = 1 - DOLARES = 2
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categoriaP');
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
        Schema::dropIfExists('productos');

    }
};
