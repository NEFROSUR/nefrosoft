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
            $table->integer('numSalida')->unique();
            $table->date('fechaSalida');
            //DATOS DEL USUARIO QUE ENTREGA
            $table->string('reponsableA',20);//Area del que entrega
            $table->string('responsable',50);//Nombre del usuario que entrega
            //DATOS DEL QUE RECEPCIONA
            $table->string('areaRecepcion',20);
            $table->string('recepcionista',50);
            //DATOS DEL AREA O FIN AL QUE VA
            $table->string('areaDestino',20);
            //TURNO DE LA ENTREGA
            $table->string('turno',1);

            $table->string('detalle')->nullable();
            $table->timestamps();

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
