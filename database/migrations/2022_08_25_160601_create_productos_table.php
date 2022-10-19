<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id')->autoincrement();
            $table->string('codigoProd',10)->unique();
            $table->string('nombreProd',50);
            $table->string('categoria_id',1);
            $table->string('categoria',25);
            $table->string('marcaProd',50);
            $table->string('umedida',10);
            $table->string('um',4);
            $table->integer('stock');
            $table->decimal('precioProm', 8, 2);
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
        Schema::dropIfExists('productos');

    }
};
