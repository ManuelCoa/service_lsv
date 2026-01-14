<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('progresos', function (Blueprint $table) {
            $table->id();
            $table->Integer('id_usuario');
            $table->unsignedBigInteger('id_leccion');
            //$table->string('estado');
            $table->integer('puntaje');
            //$table->dateTime('fecha_completitud');
            //$table->integer('intentos');
            $table->timestamps();

            $table->foreign('id_usuario')->references('cedula')->on('users');
            $table->foreign('id_leccion')->references('id')->on('lecciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progresos');
    }
};
