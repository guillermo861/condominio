<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Grade;

class GradesController extends Controller
{
    public function index(){
        $response = Grade::where('id','>','0')->get()->all();
        return json_encode($response);
    }
}
