<?php

namespace App\Http\Controllers\Api\V1;

use App\Cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return object
     */
    public function index()
    {
        return Cars::all();
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return object
     */
    public function store(Request $request)
    {
        $car = Cars::create($request->all());
        return $car;
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return object
     */
    public function show($id)
    {
        return Cars::findOrFail($id);
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
        $car = Cars::findOrFail($id);
        $car->update($request->all());
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return object
     */
    public function destroy($id)
    {
        $car = Cars::findOrFail($id);
        $car->delete();
        return '';
    }
}
