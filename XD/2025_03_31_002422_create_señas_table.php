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
       Schema::create('señas', function (Blueprint $table) {
            $table->id('id_seña');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('url_img');
            $table->unsignedBigInteger('id_categoria_semantica');
            $table->timestamps();

            $table->foreign('id_categoria_semantica')->references('id_categoria')->on('categoria_semanticas')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('señas');
    }
};
