<?php

namespace App\Http\Controllers;

use App\pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function show(pets $pets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function edit(pets $pets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pets $pets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pets  $pets
     * @return \Illuminate\Http\Response
     */
    public function destroy(pets $pets)
    {
        //
    }
}
