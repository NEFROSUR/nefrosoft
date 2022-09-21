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
            $table->unsignedBigInteger('product_id');
            //DATOS DEL USUARIO QUE ENTREGA
            $table->string('reponsableA',20);//Area del que entrega
            $table->string('responsable',50);//Nombre del usuario que entrega
            $table->date('fechaSalida');
            $table->integer('numSalida');
            //DATOS DEL PRODUCTO ENTREGADO
            $table->integer('cantidad');
            $table->string('um',7);
            $table->string('precioUnidad');
            //DATOS DEL QUE RECEPCIONA
            $table->string('areaRecepcion',20);
            $table->string('recepcionista',50);
            //DATOS DEL AREA O FIN AL QUE VA
            $table->string('areaDestino',20);
            $table->string('detalle');

            $table->timestamps();

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
        Schema::dropIfExists('salida_almacens');
    }
};
