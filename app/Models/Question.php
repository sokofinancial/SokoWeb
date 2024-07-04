<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $fillable = ['question'];

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function respondentAnswers(): HasMany
    {
        return $this->hasMany(RespondentAnswer::class);
    }
}
