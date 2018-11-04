<?php

namespace App\Http\Controllers\Api\V1;

use App\Payments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return object
     */
    public function index()
    {
        return Payments::all();
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return object
     */
    public function store(Request $request)
    {
        $payment = Payments::create($request->all());
        return $payment;
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return object
     */
    public function show($id)
    {
        return Payments::findOrFail($id);
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
        $payment = Payments::findOrFail($id);
        $payment->update($request->all());
        return $payment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return object
     */
    public function destroy($id)
    {
        $payment = Payments::findOrFail($id);
        $payment->delete();
        return '';
    }
}
