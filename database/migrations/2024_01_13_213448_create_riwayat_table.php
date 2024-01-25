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
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id('riwayat_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wisata_id'); 
            $table->string('unique_code');
            $table->integer('kuantitas'); 
            $table->date('tanggal'); 
            $table->time('waktu'); 
            $table->timestamps();

            // Definisi foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('wisata_id')->references('wisata_id')->on('wisata');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
