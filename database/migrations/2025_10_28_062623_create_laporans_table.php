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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id(); // ID utama tabel
            $table->string('sid')->unique(); // Kolom 'sid' untuk diakses di route
            $table->text('deskripsi_laporan'); // Contoh kolom lain
            $table->string('status')->default('pending'); // Kolom 'status'
            // Tambahkan kolom lain yang Anda butuhkan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
