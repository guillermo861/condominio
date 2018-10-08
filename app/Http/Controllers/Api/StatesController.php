<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\State;

class StatesController extends Controller
{
    public function index(){
        $response = State::where('id','>','0')->get()->all();
        return json_encode($response);
    }
}
