<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Publication_to_states_grades as PTSG;

class PublicationsToStateGradeController extends Controller
{
    public function index(){
        $response = PTSG::all();
        return json_encode($response);
    }
}
