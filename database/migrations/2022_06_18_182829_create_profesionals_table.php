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
        Schema::create('profesionals', function (Blueprint $table) {
            $table->id();
            $table->integer('dniP');//numero de dni
            $table->char('primerNombreP',50);//primer nombre del profesional
            $table->char('otroNombreP',50);//segundo nombre del profesional
            $table->char('apellidoPaternoP',50);//apellido paterno del profesional
            $table->char('apellidoMaternoP',50);//apellido materno del profesional
            $table->string('direccionP');//direccion del profesional
            $table->integer('telefonoP');//telefono registrado del profesional
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
        Schema::dropIfExists('profesionals');
    }
};
