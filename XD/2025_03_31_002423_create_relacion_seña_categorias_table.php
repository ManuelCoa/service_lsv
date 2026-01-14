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
        Schema::create('relacion_seña_categorias', function (Blueprint $table) {
            $table->id('id_relacion');
            $table->unsignedBigInteger('id_seña');
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();

            $table->foreign('id_seña')->references('id_seña')->on('señas')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria_semanticas')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relacion_seña_categorias');
    }
};
