<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique(); // Menambahkan kolom email dengan constraint unique
            $table->string('tlp'); // Menambahkan kolom tlp untuk nomor telepon
            $table->string('wa'); // Menambahkan kolom wa untuk nomor WhatsApp
            $table->text('alamat'); // Menambahkan kolom alamat untuk menyimpan link frame alamat dari Google Maps
            $table->string('ig'); // Menambahkan kolom ig untuk alamat Instagram
            $table->string('github'); // Menambahkan kolom github untuk alamat GitHub
            $table->timestamps();
        });


        // Insert a default contact record
        DB::table('contacts')->insert([
            'email' => 'admin@gmail.com',
            'tlp' => '-',
            'wa' => '-',
            'alamat' => 'Your Google Maps address link here',
            'ig' => '-',
            'github' => '-',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
