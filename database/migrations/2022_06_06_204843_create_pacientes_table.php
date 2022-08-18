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
            $table->id('id'); //id del paciente
            $table->char('dni',9);//numero de dni
            $table->char('primerNombre',50);//primer nombre del paciente
            $table->char('otroNombre',50)->nullable();//segundo nombre del paciente
            $table->char('apellidoPaterno',50);//apellido paterno del paciente
            $table->char('apellidoMaterno',50);//apellido materno del paciente
            $table->date('fechaNacimiento');//OBS_0006
            $table->string('direccion');//direccion del paciente segun IPRESS
            $table->string('direccion1')->nullable();//OBS_0008
            $table->integer('telefono')->nullable();//telefono registrado del paciente
            $table->integer('telefono1')->nullable();//OBS_0007
            $table->integer('telefono2')->nullable();//OBS_0007
            $table->char('numHistoria',10);//numero de historia segun IPRESS
            $table->char('regimen',20);// tipo SIS
            $table->char('numAfiliacion');//OBS_0004 
            $table->date('fechaAfiliacion')->nullable();//OBS_0004
            $table->integer('turno'); //turno al que pertenece actualmente
            $table->string('frecuencia'); //turno al que pertenece actualmente
            $table->char('estado',8);//OBS_0010
            $table->string('detalleEstado')->nullable();//OBS_0010
            $table->integer('cama')->nullable();
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
