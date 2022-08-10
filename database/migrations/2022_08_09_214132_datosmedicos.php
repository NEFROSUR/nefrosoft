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
        Schema::create('datosmedicos', function (Blueprint $table) {
            $table->id('id')->autoincrement();
            $table->unsignedBigInteger('paciente_id');
            //$table->char('modulo',1);//1 o 2
            $table->date('fechaDatos');
            $table->integer('mes');
            $table->integer('year');

            $table->date('fechaIngreso');
            $table->char('tipoAcceso',7);// Fistula | CBC (temp o perm
            $table->char('tamanoFiltro',2); //1.8 o 2.0
            $table->integer('transaminaza')->nullable();//mayor a 28

            $table->date('fechaCN')->nullable();
            $table->integer('hierroM')->nullable();
            $table->integer('epoM')->nullable();
            $table->integer('vitM')->nullable();

            $table->date('fechaKTV')->nullable();
            $table->integer('ultrafiltrado')->nullable();
            $table->integer('qb')->nullable();
            $table->integer('qd')->nullable();
            $table->integer('ocm')->nullable();
            $table->integer('presionIni')->nullable();
            $table->integer('tiempoHemodialisis')->nullable();
            $table->integer('diuresisResidual')->nullable();

            $table->integer('hemoglobina')->nullable();
            $table->integer('hematocrito')->nullable();
            $table->integer('calcioSerico')->nullable();
            $table->integer('pharatormona')->nullable();

            $table->integer('agHb')->nullable();
            $table->integer('hiv')->nullable();
            $table->integer('hepatitisB')->nullable();
            $table->integer('hepatitisC')->nullable();
            $table->integer('tbc')->nullable();
            $table->integer('covid')->nullable();

            $table->string('observaciones')->nullable();

            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datosmedicos');
    }
};
