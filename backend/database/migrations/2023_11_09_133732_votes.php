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
        Schema::create('Votes', function (Blueprint $table) {
            $table->id();
            $table->string('discord_id');
            $table->string('event_id');
            $table->string('team_id');
            $table->string('score');
            $table->enum('is_judge', ['true', 'false'])->default('false');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Votes');
    }
};
