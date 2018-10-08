<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Publication;

class PublicationsController extends Controller
{
    public function index(){
        $response = Publication::where('id','>','0')->get()->all();
        return json_encode($response);
    }

    public function post(Request $publicationRequest){
        $publications = new Publication();

        $publications->save();
        return true;
    }
}
