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
        Schema::create('mytitles', function (Blueprint $table) {
            $table->id();
            $table->string('titlename');
            $table->timestamps();
        });

         // Insert a default user record
         DB::table('mytitles')->insert([
            'titlename' => 'Programmer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mytitles');
    }
};
