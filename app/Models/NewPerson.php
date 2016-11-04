<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\NewPerson
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NewPerson whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NewPerson whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NewPerson whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NewPerson whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NewPerson whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewPerson extends Model {

    protected $fillable = [
        "name", "description"
    ];

}
