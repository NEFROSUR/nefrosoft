<?php

namespace App\Http\Controllers;

use App\Models\historia;
use App\Models\paciente;
use App\Models\fua;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view ('historia');
        $pdf = PDF::loadView('historia');
        return $pdf->download('fd.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pacientesEscogidos = $request->get('pacientesEscogidos');

        $turno = $request->get('turno');
        $frecuencia = $request->get('frecuencia');

        $pacientesAll = paciente::all();


        if ($turno == '' && $frecuencia == '') {
            $data = array("lista_pacientes" => $pacientesAll);
        } else {
            if ($turno == '' && $frecuencia != '') {
                $data['lista_pacientes'] = Paciente::where('frecuencia', '=', $frecuencia)->paginate(5);
            }
            if ($turno != '' && $frecuencia == '') {
                $data['lista_pacientes'] = Paciente::where('turno', '=', $turno)->paginate(5);
            }
            if ($turno != '' && $frecuencia != '') {
                $data['lista_pacientes'] = Paciente::where('turno', '=', $turno)->where('frecuencia', '=', $frecuencia)->paginate(5);
            }
        }
        if ($pacientesEscogidos != '') {
                $hds=array();
                foreach ($pacientesEscogidos as $item) {
                    $hd = new historia();
                    $fecha = Carbon::now();
                    $fecha = $fecha->format('d-m-Y');

                    $paciente_id = $item;;

                    //ingreso de sesion
                    $sesionAnterior = fua::where('paciente_id', '=', $paciente_id)->where('tipoDeConsulta', '=', 'Atencion de Procedimientos Ambulatorios')->count();
                    $numSesion = $sesionAnterior +1;
                    //extraccion de datos
                    $nombrePaciente = paciente::where('id','=',$paciente_id)->first();
                    //ingreso de datos
                    $hd->fecha = $fecha;
                    $hd->nombre = $nombrePaciente->primerNombre;
                    $hd->numSesion = $numSesion;
                    $hd->paciente_id = $paciente_id;
                    array_push($hds,$hd);
                }
                $pdf = PDF::loadView('historias.formHD', ['hds'=>$hds]);
                return $pdf->download('hd.pdf');
        }
        return view('historias.crearHD', $data);
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
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function show(historia $historia)
    {
        return view ('historias.mostrarHD');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function edit(historia $historia)
    {
        return view ('historias.editarHD');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, historia $historia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function destroy(historia $historia)
    {
        //
    }
}
