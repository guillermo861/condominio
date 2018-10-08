<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'id_subject',
        'id_scool_year',
        'id_state',
        'id_state_grade',
        'id_language',
        'id_format',
        'issn',
        'isbn',
        'sku',
    ];
}
