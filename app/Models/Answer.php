<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    protected $fillable = ['answer', 'score'];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function respondentAnswers(): HasMany
    {
        return $this->hasMany(RespondentAnswer::class);
    }
}
