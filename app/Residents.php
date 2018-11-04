<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class residents extends Model
{
    protected $fillable = [
        'id_property',
        'name',
        'sex',
        'birthdate'
    ];
}
