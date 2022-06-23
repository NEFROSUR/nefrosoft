<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\profesional;


class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('profesional'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesionales.crearProfesionales');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProfesional = request()->except('_token');
        profesional::insert($datosProfesional);

        return view ('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function show(profesional $profesional)
    {
        return view ('profesionales.mostrarProfesionales');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function edit(profesional $profesional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profesional $profesional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function destroy(profesional $profesional)
    {
        //
    }
}
