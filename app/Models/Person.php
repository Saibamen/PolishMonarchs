<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Person
 *
 * @property integer $id
 * @property string $name
 * @property string $file
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Answer[] $answers
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Person whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Person whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Person whereFile($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Person whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Person extends Model {

    protected $fillable = [
        "name", "file"
    ];

    public function answers() {
        return $this->hasMany(Answer::class);
    }

}
