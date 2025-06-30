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
        Schema::create('murid', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique(); // Mengubah 'nama' menjadi unik
            $table->string('prodi');
            $table->integer('semester');
            $table->string('biodata', 50); // Membatasi 'biodata' hingga 50 karakter
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
