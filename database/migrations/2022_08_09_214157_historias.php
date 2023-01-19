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
        Schema::create('historias', function (Blueprint $table) {
            $table->id('id')->autoincrement();

            $table->date('fecha');

            

            $table->integer('hierro')->nullable();
            $table->integer('epo')->nullable();
            $table->integer('vit')->nullable();

            $table->char('estado',1);//activo=1 inactivo=0
            $table->string('complicaciones')->nullable();
            $table->string('ocurrencias')->nullable(); //heparinizacion
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
        Schema::dropIfExists('historias');
    }
};
