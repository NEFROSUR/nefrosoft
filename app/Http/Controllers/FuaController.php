<?php

namespace App\Http\Controllers;

use App\Models\fua;
use Illuminate\Http\Request;
use App\Models\paciente;
use Illuminate\Support\Facades\App;
use PDF;
//use Dompdf\Dompdf;
//use Barryvdh\DomPdf\Facade as PDF;


class FuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recepcion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        /**
         *  $table->id('id')->autoincrement();
         *  $table->integer('correlativo');
         *  $table->date('fecha');
         *  $table->char('tipoDeConsulta');
         *  $table->integer('numSesion');
         *  $table->unsignedBigInteger('paciente_id');
         *  $table->timestamps();
         *   $table->foreign('paciente_id')->references('id')->on('pacientes');
         */
        if ($request->input('pacientesEscogidos')!=null)
        {
            $pacientesEscogidos = implode(',', $request->input('pacientesEscogidos'));
            $datosPacientesF['pacientes']=paciente::where('primerNombre','=',$pacientesEscogidos);
            
        } 
        //$fua = new Fua();
        //$datosPacientes['pacientes']=paciente::orderBy('turno','asc');
        //$paciente = paciente::pluck('id','primerNombre');
        return view('recepcion.crearFua',compact('datosPacientesF'));
    }
    public function pdf(){
        $fuas = Fua::paginate();
        //$pdf = PDF::loadView('recepcion.fua',['fuas'=>$fuas]);
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->stream();
        return view('recepcion.formFua',compact('fuas'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosFua = request()->except('_token');
        
        fua::insert($datosFua);

        return view ('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $turno = $request->get('turno');
        $fua = new Fua();


        if($turno==''){
            $datosPacientes['pacientes']=paciente::orderBy('turno','asc');
        }else{
                $datosPacientes['pacientes']=paciente::where('turno','=',$turno);
        }
        //$datosPacientes['pacientes']=paciente::orderBy('turno','asc');
        //$paciente = paciente::pluck('id','primerNombre');
        return view('recepcion.mostrarFua',$datosPacientes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function edit(fua $fua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fua $fua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function destroy(fua $fua)
    {
        //
    }
}
