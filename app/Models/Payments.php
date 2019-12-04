<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    protected $fillable = [
        'id_property',
        'id_concept',
        'amount',
        'description'
    ];
}
