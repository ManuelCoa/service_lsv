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
        Schema::table('lecciones', function (Blueprint $table) {
            $table->unsignedBigInteger('id_seña')->after('id_nivel');
            
            $table->foreign('id_seña')->references('id_seña')->on('señas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lecciones', function (Blueprint $table) {
            $table->dropForeign(['id_seña']); // Elimina la clave foránea
            $table->dropColumn('id_seña');
        });
    }
};
