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
            $table->char('rucProv',15)->unique();
            $table->char('nameProv',50);
            $table->integer('telefonoProv')->nullable();
            $table->char('categoriaProv',15)->nullable();
            $table->char('correoProv',30)->nullable();
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
