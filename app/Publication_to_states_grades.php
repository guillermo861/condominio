<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication_to_states_grades extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_publication',
        'id_state',
        'id_grade',
    ];
}
