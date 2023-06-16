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
        Schema::create('favorite_heroes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->foreignId('heroes_id');
            $table->date('date');
            $table->text('notes');
            $table->float('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite_heroes');
    }
};
