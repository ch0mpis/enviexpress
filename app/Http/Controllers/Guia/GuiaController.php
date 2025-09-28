<?php

namespace App\Http\Controllers\Guia;

use App\Http\Controllers\Controller;
use App\Models\Guia;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGuiaRequest;
use App\Http\Requests\UpdateGuiaRequest;
use App\Models\Persona;


class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guias = Guia::all(); //los index estan pendientes por crearse, borrar cuando no pls
        return view('guias.index',compact('guias')); //Todas las variables ($) son en minuscula
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

            return view('guias.create', [
        'remitentes' => Persona::OrderBy('nombres')->get(['id_persona','nombres']),
        'destinatarios' => Persona::OrderBy('nombres')->get(['id_persona','nombres']),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuiaRequest $request)
    {
        Guia::create($request->validated());
        return redirect()->route('guias.index')
        ->with('ok', 'La guias fue generada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guia $guia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guia $guia)
    {
    //$remitentes = Persona::where('tipo_persona', 'remitente')->get();
    //$destinatarios = Persona::where('tipo_persona', 'destinatario')->get();
    return view('Guias.edit', [
        'remitentes' => Persona::OrderBy('nombres')->get(['id_persona','nombres']),
        'destinatarios' => Persona::OrderBy('nombres')->get(['id_persona','nombres']),
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuiaRequest $request, Guia $guia)
    {
        $guia->update($request->validated());
        return redirect()->route('guias.index')->with('ok', 'La guias fue actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guia $guia)
    {
    try {
            $guia->delete();
            return back()->with('ok', 'guias eliminada correctamente.');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: la guias tiene registros relacionados.');
        }
    }
}
