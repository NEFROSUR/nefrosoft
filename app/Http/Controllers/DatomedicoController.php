<?php

namespace App\Http\Controllers;

use App\Models\datomedico;
use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\profesional;
use Carbon\Carbon;
use PDF;

class DatomedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pacientes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes['pacientes'] = paciente::orderBy('turno','asc')->get();
        return view('datomedico.crearDM',$pacientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([

        ]);
        $datomedico = new datomedico();
        $fechaActual = Carbon::now();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datomedico  $datomedico
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $dni = $request->get('dni');
        if($dni!=''){
            $paciente = paciente::where('dni', '=', $dni)->first();
            $paciente->datomedicos;
        }else{
            $paciente=paciente::orderBy('turno','asc')->first();
        }
        


        return view('datomedico.mostrarDM', ['paciente'=>$paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datomedico  $datomedico
     * @return \Illuminate\Http\Response
     */
    public function edit(datomedico $datomedico)
    {
        return view('datomedico.mostrarDM');
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
    public function mdatoBase()
    {
        $datobase=1;
        //$this->create($datobase);
        return view('datomedico.datomedicoBase');
    }
}
