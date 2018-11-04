<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    protected $fillable = [
        'id_property',
        'plates',
        'brand',
        'subBrand',
        'color'
    ];
}
