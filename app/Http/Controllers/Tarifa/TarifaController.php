<?php

namespace App\Http\Controllers\Tarifa;

use App\Http\Controllers\Controller;
use App\Models\Tarifa;
use Illuminate\Http\Request;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarifas = Tarifa::all();
        return view('Tarifa.index',compact('tarifas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarifa $tarifa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarifa $tarifa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarifa $tarifa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarifa $tarifa)
    {
        //
    }
}
