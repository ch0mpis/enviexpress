<?php

namespace App\Http\Controllers\Asignaciones;

use App\Http\Controllers\Controller;
use App\Models\Asignacione;
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    {
        $asignaciones = Asignaciones::all(); //los index estan pendientes por crearse, borrar cuando no pls
        return view('Asignaciones.index',compact('asignaciones')); //Todas las variables ($) son en minuscula
    }
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
    public function show(Asignacione $asignacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignacione $asignacione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignacione $asignacione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignacione $asignacione)
    {
        //
    }
}
