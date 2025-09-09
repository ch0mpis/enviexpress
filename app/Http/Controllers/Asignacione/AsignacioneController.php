<?php

namespace App\Http\Controllers\Asignacione;

use App\Http\Controllers\Controller;
use App\Models\Asignacione;
use Illuminate\Http\Request;

class AsignacioneController extends Controller
{
    /*$employees = HrEmployees:.with(['HrJob','hr_department'])
    ->oderBy('employee_id')
    ->get();
    return view('Asignacione.index', compact('asignaciones'));
     */

    public function index()
    {
        $asignaciones = asignacione::all();
        return view('Asignacione.index', compact('asignaciones'));
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
