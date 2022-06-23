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
        Schema::create('fuas', function (Blueprint $table) {
            $table->id('id')->autoincrement();
            $table->integer('correlativo');
            $table->date('fecha');
            $table->char('tipoDeConsulta');
            $table->integer('numSesion');
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('profesional_id');
            $table->timestamps();

            //$table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');

            $table->foreign('profesional_id')->references('id')->on('profesionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuas');
    }
};
