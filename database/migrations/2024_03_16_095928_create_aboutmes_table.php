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
        Schema::create('aboutmes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('detail');
            $table->timestamps();
        });


        // Insert a default aboutmes record
        DB::table('aboutmes')->insert([
            'title' => 'My introduction',
            'detail' => 'insert detail here',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutmes');
    }
};
