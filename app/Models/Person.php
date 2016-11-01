<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    protected $fillable = [
        "name", "file"
    ];

    public function answers() {
        return $this->hasMany(Answer::class);
    }

}
