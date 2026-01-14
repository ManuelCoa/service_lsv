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
        /*
        Schema::create('content_texts', function (Blueprint $table) {
            $table->id();
            $table->string('preguntas');
            $table->string('instrucciones');
            $table->string('descripcion');
            $table->unsignedBigInteger('id_leccion');
            $table->timestamps();

            $table->foreign('id_leccion')->references('id')->on('lecciones')->onDelete('cascade');
        });
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*
        Schema::dropIfExists('content_texts');
        */
    }
};
