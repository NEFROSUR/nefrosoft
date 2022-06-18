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
    public function index(Request $request){

        $turno = $request->get('turno');
        $frecuencia = $request->get('frecuencia');
        $correlativo = $request->get('correlativo');
        $documento = $request->get('documento');

        if ($turno == '' && $frecuencia == '' && $correlativo == '' && $documento == '') {
            $f2 = Carbon::now();
            $f2 = $f2->format('d-m-Y');
            $f1 = Carbon::now()->startOfMonth();
            $f1 = $f1->format('d-m-Y');
            $totalFuas = fua::whereBetween('fecha', [$f1, $f2])->paginate(10);
        } else {
            if ($turno == '' && $frecuencia == ''&& $correlativo != '' && $documento == '') {
                $totalFuas = fua::where('correlativo', '=', $correlativo)->paginate(5);
            }
            if ($turno == '' && $frecuencia == ''&& $correlativo == '' && $documento != '') {
                $paciente = paciente::where('dni', '=', $documento)->paginate(5);
                //$id_buscado = $paciente->id;
                $totalFuas = fua::where('paciente_id', '=', $paciente)->paginate(5);
            }
        }
        
        return view('recepcion', ['totalFuas'=>$totalFuas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }
    public function createPDF()
    {

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

        return view('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $pacientesEscogidos = $request->get('pacientesEscogidos');

        $turno = $request->get('turno');
        $frecuencia = $request->get('frecuencia');

        $correlativoI = $request->get('correlativoI');
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
            if ($correlativoI != '') {
                $fuas=array();
                $i = 0;
                foreach ($pacientesEscogidos as $item) {
                    $fua = new Fua();
                    $correlativo = $correlativoI;
                    $fecha = Carbon::now();
                    $fecha = $fecha->format('d-m-Y');
                    $tipoDeConsulta = $request->get('tipoDeConsulta');

                    $numSesion = '1';
                    $paciente_id = $item;
                    //ingreso de datos
                    $fua->correlativo = $correlativo;
                    $fua->fecha = $fecha;
                    $fua->tipoDeConsulta = $tipoDeConsulta;
                    $fua->numSesion = $numSesion;
                    $fua->paciente_id = $paciente_id;
                    $fua->save();
                    $fua->paciente;
                    array_push($fuas,$fua);
                    $correlativoI++;
                    $i++;
                }
                $pdf = PDF::loadView('recepcion.formFua', ['fuas'=>$fuas]);
                return $pdf->download('fua.pdf');

            } 
        }

        return view('recepcion.mostrarFua', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        $fuas = fua::where('id', '=', $id);
        $pdf = PDF::loadView('recepcion.formFua', ['fuas'=>$fuas]);
        return $pdf->download('fua.pdf');
        return view('recepcion');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fua::destroy($id);
        return redirect('recepcion');
    }
}