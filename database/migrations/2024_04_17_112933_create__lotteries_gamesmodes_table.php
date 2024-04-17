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
        Schema::create('lotteries_gamesmodes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gamemode_id')->constrained('gamemodes');
            $table->foreignId('lottery_id')->constrained('lotteries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotteries_gamesmodes');
    }
};
