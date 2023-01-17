<?php

namespace App\Http\Controllers;

use App\Models\fua;
use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\profesional;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;


use Nette\Utils\ArrayList;
use PDF;
//use PDFMerger;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use PhpParser\Node\Expr\Cast\Array_;
use Sabberworm\CSS\Value\Size;

use function PHPUnit\Framework\isEmpty;
use Carbon\Carbon;

//use Dompdf\Dompdf;
//use Barryvdh\DomPdf\Facade as PDF;

//CONTROLADOR DEL GENERADOR DE FUAS (EXTREMO CUIDADO)
class FuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $correlativo = $request->get('correlativo');
        $mes = $request->get('mes');
        if ($correlativo == '') {
            $f2 = Carbon::now();
            $f2 = $f2->format('d-m-Y');
            $f1 = Carbon::now()->startOfMonth();
            $f1 = $f1->format('d-m-Y');
            //$totalFuas = fua::whereBetween('fecha', [$f1, $f2])->cursorPaginate(5);
            $totalFuas = fua::orderBy('correlativo', 'desc')->paginate(10);
        } else {
            if ($correlativo != '') {
                $totalFuas = fua::where('correlativo', '=', $correlativo)->paginate(10);
            }
            if($mes !=''){
                $fechaInicial='01'.$mes;

                //$totalFuas = fua::where('fecha', '<', $f1)->paginate(10);
            }
        }

        return view('recepcion', ['totalFuas' => $totalFuas]);
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
    //IMPRIME UNA SOLA FUA SELECCIONADA PASANDOLE EL ID
    public function createUnitPDF($id)
    {
        $fuas = array();
        $fua = Fua::findOrFail($id);
        //transformar fecha
        //tipo de consulta
        //registro de atras tampoco sale
        $fechaT = strrev($fua->fecha);

        $fecha_invertida = '';
        $index = strlen($fechaT) - 1;
        while ($index >= 0) {
            $fecha_invertida .= $fechaT[$index];

            $index--;
        }

        $fua->fecha = $fechaT;
        $fua->paciente;
        $fua->profesional;
        //GENERADOR DE PDF POR PDFMERGE (INEFICIENTE(MEJORAR), GENERA LA CARA Y EL REVERSO Y LOS JUNTA EN UNA SOLO FUA)
        array_push($fuas, $fua);
        $pdfMerger = PDFMerger::init();
        $pdf = PDF::loadView('recepcion.demoIni', ['fuas' => $fuas]);
        $pdf->save(public_path() . "/pdf.pdf");

        $pdfr = PDF::loadView('recepcion.reverso', ['fuas' => $fuas]);
        $pdfr->save(public_path() . "/pdfr.pdf");

        $ruta1 = public_path() . "/pdf.pdf";
        $ruta2 = public_path() . "/pdfr.pdf";

        $pdfMerger->addPDF($ruta1, '1');
        $pdfMerger->addPDF($ruta2, '1');

        $pdfMerger->merge();
        $pdfMerger->save("fuas.pdf", "download");
        unlink($ruta1);
        unlink($ruta2);
        return view('recepcion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //GUARDA FUA
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
    //METODO EXTENSO
    //MANDA LA LISTA DE LOS PROFESIONALES, PACIENTES Y EL CORRELATIVO USADO
    //FILTRADO POR TURNO Y FRECUENCIA
    //GENERADOR DE FUAS MAXIMO
    public function show(Request $request)
    {
        $estado = 'activo';
        $detalleEstado = '';
        $pacientesEscogidos = $request->get('pacientesEscogidos');

        $turno = $request->get('turno');
        $frecuencia = $request->get('frecuencia');

        $fechaGenerada = $request->get('fechaGenerada');
        $pacientesAll = paciente::all();
        $medicosAll = profesional::all();
        $ultimoUsado = fua::max('correlativo');
        


        if ($turno == '' && $frecuencia == '') {
            $data['lista_pacientes'] = Paciente::orderBy('cama', 'asc')->where('estado', '=', 'activo')->paginate(11);
        } else {
            if ($turno == '' && $frecuencia != '') {
                $data['lista_pacientes'] = Paciente::orderBy('cama', 'asc')->where('frecuencia', '=', $frecuencia)->where('estado', '=', 'activo')->paginate(11);
            }
            if ($turno != '' && $frecuencia == '') {
                $data['lista_pacientes'] = Paciente::orderBy('cama', 'asc')->where('turno', '=', $turno)->where('estado', '=', 'activo')->paginate(11);
            }
            if ($turno != '' && $frecuencia != '') {
                $data['lista_pacientes'] = Paciente::orderBy('cama', 'asc')->where('turno', '=', $turno)->where('frecuencia', '=', $frecuencia)->where('estado', '=', 'activo')->paginate(11);
            }
        }
        if ($pacientesEscogidos != '') {
            if ($fechaGenerada != '') {
                $request->validate([
                    'fechaGenerada' => 'date',
                ]);
                //HACE UNA CONSULTA POR CADA PACIENTE QUE SELECCIONASTE, DE AQUI SE EXTRAEN LOS DATOS PARA LA FUA Y SE GUARDAN EN UN ARRAY
                //AL MISMO TIEMPO SE GUARDAN EN LA BASE DE DATOS CON UN CORRELATIVO DIFERENTE COMO UNA NUEVA ATENCION
                $fuas = array();
                foreach ($pacientesEscogidos as $item) {
                    $fua = new Fua();
                    $tipoDeConsulta = $request->get('tipoDeConsulta');
                    $paciente_id = $item;
                    $profesional_id = $request->medico;

                    //ingreso de sesion
                    $sesionAnterior = fua::where('paciente_id', '=', $paciente_id)->where('tipoDeConsulta', '=', 'Atencion de Procedimientos Ambulatorios')->count();
                    $numSesion = $sesionAnterior + 1;
                    //ingreso de datos
                    $fua->correlativo = fua::max('correlativo')+ 1;//toma el mayor correlativo
                    $fua->fecha = $fechaGenerada;
                    $fua->tipoDeConsulta = $tipoDeConsulta;
                    $fua->numSesion = $numSesion;
                    $fua->paciente_id = $paciente_id;

                    $fua->profesional_id = $profesional_id;
                    $fua->estado = $estado;
                    $fua->detalleEstado = $detalleEstado;
                    $fua->save();
                    $fua->paciente;
                    $fua->profesional;


                    array_push($fuas, $fua);
                }
                //EL ARRAY GENERADO SE DESLIGA EN HOJA POR HOJA Y GENERA REVERSOS UNO A UNO
                //POR ULTIMO UNE CADA UNO DE LOS PDFs GENERADOS Y LOS ENVIA COMO UN SOLO PDF
                //ESTO SE HACE POR LA GENERACION EL GUARDADO EN BD, LA EXTRACCION Y COMBINACION, POR ULTIMO SE ELIMINA LO GUARDADO
                //ES INEFICIENTE
                $pdfMerger = PDFMerger::init();

                $pdf = PDF::loadView('recepcion.demo', ['fuas' => $fuas]);
                $pdf->save(public_path() . "/pdf.pdf");

                $pdfr = PDF::loadView('recepcion.reverso', ['fuas' => $fuas]);
                $pdfr->save(public_path() . "/pdfr.pdf");

                $ruta1 = public_path() . "/pdf.pdf";
                $ruta2 = public_path() . "/pdfr.pdf";
                $pasador = 1;

                foreach ($fuas as $fua) {

                    $pdfMerger->addPDF($ruta1, $pasador);
                    $pdfMerger->addPDF($ruta2, $pasador);

                    $pasador++;
                }
                $pdfMerger->merge();
                $pdfMerger->save("fuas.pdf", "download");
                unlink($ruta1);
                unlink($ruta2);

            }
            return view('recepcion.show');
        }
        return view('recepcion.mostrarFua', $data, ['medicos' => $medicosAll])->with('ultimoUsado',$ultimoUsado);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    //DESACTIVA LA FUA
    public function edit($id)
    {
        $FuaInactiva = Fua::findOrFail($id);
        return view('recepcion.desactivateF', ['FuaInactiva' => $FuaInactiva]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fua)
    {
        return redirect('recepcion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    //ELIMINA LA FUA GENERADA
    public function destroy($id)
    {
        fua::destroy($id);
        return redirect('recepcion');

    }
}
