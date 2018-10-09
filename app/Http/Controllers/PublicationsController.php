<?php

namespace App\Http\Controllers;

class PublicationsController extends Controller
{
    public function index(){
        return view('publications.index');

    }
}
