<?php

namespace App\Http\Controllers\RolesPermiso;

use App\Http\Controllers\Controller;
use App\Models\RolesPermiso;
use Illuminate\Http\Request;

class RolesPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rolesperm = RolesPermiso::all(); //los index estan pendientes por crearse, borrar cuando no pls
        return view('RolesPerm.index',compact('rolesperm')); //Todas las variables ($) son en minuscula
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
    public function show(RolesPermiso $rolesPermiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RolesPermiso $rolesPermiso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RolesPermiso $rolesPermiso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolesPermiso $rolesPermiso)
    {
        //
    }
}
