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
            $table->string('codigoProd',5)->unique();
            $table->string('nombreProd',50);
            $table->unsignedBigInteger('categoria_id');
            $table->string('marcaProd',50);
            $table->string('unidadMedidaProd',20);//
            $table->string('um',7);
            $table->string('precioUnitarioProd',10);
            $table->string('tipoMoneda',1);//SOLES = 1 - DOLARES = 2
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categoriaP');

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
