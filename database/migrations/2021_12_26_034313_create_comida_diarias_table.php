<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidaDiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comida_diarias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desayuno_id');
            $table->unsignedBigInteger('refrigerioam_id');
            $table->unsignedBigInteger('almuerzo_id');
            $table->unsignedBigInteger('refrigeriopm_id');
            $table->unsignedBigInteger('cena_id');
            $table->unsignedBigInteger('user_id');
            $table->date('fecha');
            $table->enum('estado', ['iniciado', 'finalizado']);
            $table->enum('estado2', ['iniciado', 'finalizado']);
            $table->enum('estado3', ['iniciado', 'finalizado']);
            $table->enum('estado4', ['iniciado', 'finalizado']);
            $table->enum('estado5', ['iniciado', 'finalizado']);
            $table->foreign('desayuno_id')->references('id')->on('comidas');
            $table->foreign('refrigerioam_id')->references('id')->on('comidas');
            $table->foreign('almuerzo_id')->references('id')->on('comidas');
            $table->foreign('refrigeriopm_id')->references('id')->on('comidas');
            $table->foreign('cena_id')->references('id')->on('comidas');
            $table->foreign('user_id')->references('id')->on('users');            
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
        Schema::dropIfExists('comida_diarias');
    }
}
