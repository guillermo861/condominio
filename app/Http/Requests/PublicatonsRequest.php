<?php
/**
 * Created by PhpStorm.
 * User: guillermo.rosas
 * Date: 07/10/18
 * Time: 15:53
 */

namespace App\Http\Requests;

use Illuminate\Http\Request;

class PublicatonsRequest extends Request
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name'=> 'requred|string',
            'id_subject'=> 'requred|integer',
            'id_scool_year'=> 'requred|integer',
            'id_state'=> 'requred|integer',
            'id_state_grade'=> 'requred|integer',
            'id_language'=> 'requred|integer',
            'id_format'=> 'requred|integer',
            'issn'=> 'requred|string',
            'isbn'=> 'requred|string',
            'sku'=> 'requred|string',
        ];
    }
}