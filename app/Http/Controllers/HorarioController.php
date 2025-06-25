<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HorarioController;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::all();
        return view('admin.horario.index', compact('horarios'));
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
    public function show(horarios $horarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(horarios $horarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, horarios $horarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(horarios $horarios)
    {
        //
    }
}
