<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {

    protected $fillable = [
        "question_id", "person_id", "answer"
    ];

    public function question() {
        return $this->belongsTo(Question::class);
    }

    public function person() {
        return $this->belongsTo(Person::class);
    }

}
