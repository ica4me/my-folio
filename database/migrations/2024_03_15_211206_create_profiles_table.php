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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable(); 
            $table->string('logonama'); 
            $table->string('namalengkap'); 
            $table->string('foto')->nullable(); 
            $table->text('detail');
            $table->string('cv');
            $table->timestamps();
        });


       // Insert a default profile record
        DB::table('profiles')->insert([
            'icon' => '-', // Specify default icon path
            'logonama' => 'bii.wahyu',
            'namalengkap' => 'WAHYUDI',
            'foto' => '-', // Specify default photo path
            'detail' => '-.',
            'cv' => '-', // Specify default CV path
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
