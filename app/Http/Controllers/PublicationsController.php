<?php

namespace App\Http\Controllers;

class PublicationsController extends Controller
{
    public function index(){
        return view('publications.index');

    }

    /**
     * Display the GuestBook form page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function save()
    {
        return view('publications.new');
    }

}
