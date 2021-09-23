<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudantes = Estudante::all();
        return view('estudante.index', ['estudantes' => $estudantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudante $estudante)
    {
        return view('estudante.show', ['estudante' => $estudante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudante $estudante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudante $estudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudante $estudante)
    {
        //
    }
}
