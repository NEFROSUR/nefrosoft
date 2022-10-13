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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id('id')->autoincrement();
            $table->string('rucProv',15)->unique();
            $table->string('nameProv',50);
            $table->integer('telefonoProv')->nullable();
            $table->string('categoriaProv',20)->nullable();
            $table->string('correoProv',30)->nullable();
            $table->string('direccionProv')->nullable();
            $table->string('detalleProv')->nullable();
            //mas datos
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
        Schema::dropIfExists('proveedors');
    }
};
