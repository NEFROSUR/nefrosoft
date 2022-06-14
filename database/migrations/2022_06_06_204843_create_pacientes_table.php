<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * php artisan migrate
     * php artisan migrate:rollback
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('id')->autoincrement(); //id del paciente
            $table->integer('dni');//numero de dni
            $table->char('primerNombre',50);//primer nombre del paciente
            $table->char('otroNombre',50);//segundo nombre del paciente
            $table->char('apellidoPaterno',50);//apellido paterno del paciente
            $table->char('apellidoMaterno',50);//apellido materno del paciente
            $table->string('direccion');//direccion del paciente segun IPRESS
            $table->integer('telefono');//telefono registrado del paciente
            //$table->string('numHistoria');//numero de historia segun IPRESS
            //$table->enum('regimen',['subsidiado','semicontributivo']);// tipo SIS
            $table->integer('turno'); //turno al que pertenece actualmente
            $table->string('frecuencia'); //turno al que pertenece actualmente
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
        Schema::dropIfExists('pacientes');
    }
};
