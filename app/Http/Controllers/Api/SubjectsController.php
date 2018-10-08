<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Subject;

class SubjectsController extends Controller
{
    public function index(){
        $response = Subject::where('id','>','0')->get()->all();
        return json_encode($response);
    }
}
