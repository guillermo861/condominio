<?php

namespace App\Http\Controllers\Api\V1;

use App\Properties;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return object;
     */
    public function index()
    {
        return Properties::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = Properties::create($request->all());
        return $property;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\properties  $properties
     * @return Object
     */
    public function show($id)
    {
        return Properties::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Properties::findOrFail($id);
        $property->update($request->all());
        return $property;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return Mixed
     */
    public function destroy($id)
    {
        $property = Properties::findOrFail($id);
        $property->delete();
        return '';
    }
}
