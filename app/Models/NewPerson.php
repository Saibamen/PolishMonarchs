<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewPerson extends Model {

    protected $fillable = [
        "name", "description"
    ];

}
