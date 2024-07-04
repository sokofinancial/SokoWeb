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
        Schema::create('respondent2s', function (Blueprint $table) {
            $table->id(); // This should be an unsignedBigInteger
            $table->string('session')->nullable();
            $table->string('email')->unique();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->nullable();
            // Define all question columns as integers
            $table->integer('question1')->nullable();
            $table->integer('question2')->nullable();
            $table->integer('question3')->nullable();
            $table->integer('question4')->nullable();
            $table->integer('question5')->nullable();
            $table->integer('question6')->nullable();
            $table->integer('question7')->nullable();
            $table->integer('question8')->nullable();
            $table->integer('question9')->nullable();
            $table->integer('question10')->nullable();
            $table->integer('question11')->nullable();
            $table->integer('question12')->nullable();
            $table->integer('question13')->nullable();
            $table->integer('total_score')->default(0)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('respondent2s');
    }
};
