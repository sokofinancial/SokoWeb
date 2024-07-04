<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RespondentAnswer extends Model
{
    protected $fillable = ['respondent_id', 'question_id', 'answer_id', 'respondent2_id', 'answer_score'];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }

    public function answer2(): BelongsTo
    {
        return $this->belongsTo(Respndent2::class);
    }
}
