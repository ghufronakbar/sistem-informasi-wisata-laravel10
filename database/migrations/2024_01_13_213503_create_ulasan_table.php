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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id('ulasan_id');
            $table->unsignedBigInteger('wisata_id'); 
            $table->text('komentar_ulasan'); 
            $table->timestamps();

            // Definisi foreign key constraint
            $table->foreign('wisata_id')->references('wisata_id')->on('wisata');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
