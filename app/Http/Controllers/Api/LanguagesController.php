<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Language;

class LanguagesController extends Controller
{
    public function index(){
        $response = Language::where('id','>','0')->get()->all();
        return json_encode($response);
    }
}
