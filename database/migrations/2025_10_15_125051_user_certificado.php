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
        schema::create('user_certificado',function( Blueprint $table){

            $table->id();
            $table->Integer('user_id');
            $table->boolean('emision')->unique();
            $table->timestamp('create_at')->nullable();

            $table->foreign('user_id')->references('cedula')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('user_certificado');
    }
};
