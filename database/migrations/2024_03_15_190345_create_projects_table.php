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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Menambahkan field nama project
            $table->text('detail'); // Menambahkan field deskripsi project
            $table->string('foto')->nullable(); // Menambahkan field untuk menyimpan gambar atau foto project, nullable jika tidak wajib diisi
            $table->string('link')->nullable(); // Menambahkan field untuk menyimpan link tautan project, nullable jika tidak wajib diisi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
