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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Menyimpan nama sertifikat
            $table->text('detail'); // Menyimpan detail atau informasi tentang sertifikat
            $table->string('foto'); // Untuk menyimpan path foto atau gambar sertifikat ke dalam database
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
