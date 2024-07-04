<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('respondent_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('respondent_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('answer_id');
            // $table->unsignedBigInteger('respondent2_id');
            $table->integer('answer_score');
            $table->timestamps();

            $table->foreign('respondent_id')->references('id')->on('respondents')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
            // $table->foreign('respondent2_id')->references('id')->on('respondent2s')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('respondent_answers');
    }
};
