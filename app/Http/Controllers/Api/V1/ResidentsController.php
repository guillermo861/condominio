<?php

namespace App\Http\Controllers\Api\V1;

use App\Residents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return object
     */
    public function index()
    {
        return Residents::all();
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return object
     */
    public function store(Request $request)
    {
        $resident = Residents::create($request->all());
        return $resident;
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return object
     */
    public function show($id)
    {
        return Residents::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return object
     */
    public function update(Request $request, $id)
    {
        $resident = Residents::findOrFail($id);
        $resident->update($request->all());
        return $resident;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return object
     */
    public function destroy($id)
    {
        $resident = Residents::findOrFail($id);
        $resident->delete();
        return '';
    }
}
