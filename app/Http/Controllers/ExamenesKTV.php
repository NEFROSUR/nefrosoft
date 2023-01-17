<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\profesional;
use App\Models\datomedico;
//CONTROLADOR EN DESARROLLO (NO FUNCIONAL AUN)
class ExamenesKTV extends Controller
{
    public function index()
    {
        return view('examenKTVIni');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pacientes['pacientes'] = paciente::where('id', '=', $id)->where('estado', '=', 'activo')->get();
        return view('examenKTV.crearKTV',$pacientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datomedico  $datomedico
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('examenKTV.mostrarKTV');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datomedico  $datomedico
     * @return \Illuminate\Http\Response
     */
    public function edit(datomedico $datomedico)
    {
        return view('');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\datomedico  $datomedico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datomedico $datomedico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datomedico  $datomedico
     * @return \Illuminate\Http\Response
     */
    public function destroy(datomedico $datomedico)
    {
        //
    }
}
