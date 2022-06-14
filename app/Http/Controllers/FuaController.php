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
        $correlativo = $request->get('correlativo');
        $paciente_id = $request->get('paciente_id');
        $fuas = fua::where('correlativo', '=' ,$correlativo);
        $pacientes = paciente::where('id','=',$paciente_id);

        return view ('recepcion.crearFua', $fuas ,$pacientes);
        //$pdf = \PDF::loadView('recepcion.crearFua', 'fuas');
        //return $pdf->download('fua.pdf');

        //return view('recepcion.crearFua');
    }
    public function createPDF(){
        //Recuperar todos los productos de la db
        /*$fuas = $request->get();
        view()->share('recepcion.crearFua', $fuas);
        $pdf = PDF::loadView('recepcion.crearFua', $fuas);
        return $pdf->download('archivo-pdf.pdf');*/
        //return view('recepcion.crearFua');
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
        

        if($turno==''&&$frecuencia==''){
            $data = array("lista_pacientes" =>$pacientesAll);
        }else{
            if($turno==''&&$frecuencia!=''){
                $data['lista_pacientes'] = Paciente::where('frecuencia','=',$frecuencia)->paginate(5);
            }
            if($turno!=''&&$frecuencia==''){
                $data['lista_pacientes'] = Paciente::where('turno','=',$turno)->paginate(5);
            }
            if($turno!=''&&$frecuencia!=''){
                $data['lista_pacientes'] = Paciente::where('turno','=',$turno)->where('frecuencia','=',$frecuencia)->paginate(5);
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
                //$fua->save();
                //$correlativoI++;
                //$i++;
                //return view('recepcion/crearFua/pdf',compact('fua'));
                /*$pdf = \PDF::loadView('recepcion.crearFua', compact('fua'));
                return $pdf->download('fua.pdf');*/
                //$pdf = PDF::loadView('recepcion.fua',['fuas'=>$fua]);
                //$fuas = array("lista_fuas" =>$fua);
                //$fuas = $fua->toArray();
                
                //$fuas['fuas'] = Fua::where('correlativo','=',$correlativo); 
                return view('recepcion.crearFua');
                
                $correlativoI++;
                $i++;
                }
            }else{
                return view('recepcion.mostrarFua',$data);
            }
                        

            //return dd($fua);
            //return view('recepcion.crearFua');
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
