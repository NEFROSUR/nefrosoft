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
        Schema::create('devolucion_almacens', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('usuario',50)->nulleable();
            $table->string('personalD',50)->nulleable();
            $table->date('fechaDevolucion');
            $table->string('numDevolucion');
            $table->string('detalle',250)->nullable();
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
        Schema::dropIfExists('devolucion_almacens');
    }
};
