<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Format;

class FormatsController extends Controller
{
    public function index(){
        $response = Format::all();
        return json_encode($response);
    }
}
