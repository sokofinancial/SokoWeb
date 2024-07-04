<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('respondents', function (Blueprint $table) {
            $table->id();
            $table->string('session')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->integer('total_score')->default(0)->nullable();
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('respondents');
    }
};
