<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    protected $fillable = [
        'block',
        'street',
        'number',
        'parkings',
        'dimensions',
        'isHause',
        'garden'
    ];
}
