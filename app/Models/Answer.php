<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Answer
 *
 * @property integer $id
 * @property integer $question_id
 * @property integer $person_id
 * @property boolean $answer
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Question $question
 * @property-read \App\Models\Person $person
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Answer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Answer wherePersonId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Answer whereAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Answer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
