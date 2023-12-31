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
        Schema::create('Vote_Tally', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_id');
            $table->double('participant_vote_score')->nullable();
            $table->double('judge_vote_score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Vote_Tally');
    }
};
