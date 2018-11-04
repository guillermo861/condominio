<?php

namespace App\Http\Controllers\Api\V1;

use App\Pets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return object
     */
    public function index()
    {
        return Pets::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return object
     */
    public function store(Request $request)
    {
        $pet = Pets::create($request->all());
        return $pet;
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return object
     */
    public function show($id)
    {
        return Pets::findOrFail($id);
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
        $pet = Pets::findOrFail($id);
        $pet->update($request->all());
        return $pet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return object
     */
    public function destroy($id)
    {
        $pet = Pets::findOrFail($id);
        $pet->delete();
        return '';
    }
}
