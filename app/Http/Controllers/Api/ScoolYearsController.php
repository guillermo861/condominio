<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Scool_year as SY;

class ScoolYearsController extends Controller
{
    public function index(){
        $response = SY::all();
        return json_encode($response);
    }
}
