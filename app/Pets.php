<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pets extends Model
{
    protected $fillable = [
        'id_property',
        'specie',
        'race'
    ];
}
