<?php

namespace App\Http\Controllers;

use App\Models\fua;
use Illuminate\Http\Request;
use App\Models\paciente;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;


use Nette\Utils\ArrayList;
use PDF;
use PhpParser\Node\Expr\Cast\Array_;
use Sabberworm\CSS\Value\Size;

use function PHPUnit\Framework\isEmpty;
use Carbon\Carbon;
//use Dompdf\Dompdf;
//use Barryvdh\DomPdf\Facade as PDF;


class FuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        /*$pacientesAll = paciente::all(); 
        $data = array("lista_pacientes" =>$pacientesAll );
        return view('recepcion/show',$data);*/
        return view('recepcion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        $fuas = request();
        fua::insert($fuas);
        return view('recepcion.crearFua');
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
        
        $pacientesEscogidos = $request->get('pacientesEscogidos');
        
        $turno = $request->get('turno');
        $frecuencia = $request->get('frecuencia');
        $fua = new Fua();
        $correlativoI = $request->get('correlativoI');
        $pacientesAll = paciente::all();
        

        if($turno!=''&&$correlativoI==''){
            $data['lista_pacientes'] = Paciente::where('turno','=',$turno)->paginate(5);
        }else{
            if($turno==''){
                $data = array("lista_pacientes" =>$pacientesAll);
            }
        }

        if($pacientesEscogidos!=''){
            if($correlativoI!=''){
                $i = 0;
            foreach($pacientesEscogidos as $item){
                $fua = new Fua();
                $correlativo = $correlativoI;
                $fecha = Carbon::now();
                $fecha = $fecha->format('d-m-Y');
                $tipoDeConsulta = $request->get('tipoDeConsulta');
                //$tipoDeConsulta = 'Atencion de Procedimiento Ambulatorios';
                //$numSesion = fua::where('turno','=',$turno);
                $numSesion = '1';
                $paciente_id = $item;


                $fua ->  correlativo = $correlativo ;
                $fua ->  fecha = $fecha;
                $fua ->  tipoDeConsulta = $tipoDeConsulta;
                $fua ->  numSesion = $numSesion;
                $fua ->  paciente_id = $paciente_id;
                $fua->save();
                $correlativoI++;
                $i++;
                //$pdf = PDF::loadView('recepcion.fua',['fuas'=>$fua]);
                //$fuas = array("lista_fuas" =>$fua);
                
                }
            }else{
                return view('recepcion.mostrarFua',$data);
            }
                        

            //return dd($fua);
            return view('recepcion.crearFua');
        }

        return view('recepcion.mostrarFua',$data);
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
