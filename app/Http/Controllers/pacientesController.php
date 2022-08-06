<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;
use Carbon\Carbon;

class pacientesController extends Controller
{
    /**
     * index para mostrar
     * store guardar
     * update actualizar
     * destroy para eliminar
     * edit para mostrar formulario de edicion
     */
    public function index(){
        //$datos['pacientes']=paciente::paginate(5);
        //return view ('pacientes',$datos);
        return view ('pacientes'); 
    }

    public function create(){
        
        return view ('pacientes.crearPacientes');
    }
    public function store(Request $request){

        $request->validate([
            'dni' => 'required|unique:pacientes',
            'primerNombre' => 'required|string',
            'otroNombre' => 'nullable|string',
            'apellidoPaterno' => 'required|string',
            'apellidoMaterno' => 'required|string',
            'telefono' => 'nullable|numeric|min:9',
            'telefono1' => 'nullable|numeric|min:9',
            'telefono2' => 'nullable|numeric|min:9',
            'numAfiliacion' => 'required',
            'fechaAfiliacion' => 'nullable|date',
            'fechaNacimiento' => 'date',

        ]);

        $paciente = new paciente();
        $estado = 'activo';
        $detalleEstado = '';
        $id =  paciente::all()->count() +1;
        //$datosPaciente = request()->except('_token');
        $paciente->id = $id;
        $paciente->dni = $request->dni;
        $paciente->primerNombre = strtoupper($request->primerNombre);
        $paciente->otroNombre = strtoupper($request->otroNombre);
        $paciente->apellidoPaterno = strtoupper($request->apellidoPaterno);
        $paciente->apellidoMaterno = strtoupper($request->apellidoMaterno);
        $paciente->fechaNacimiento = $request->fechaNacimiento;
        $paciente->direccion = $request->direccion;
        $paciente->direccion1 = $request->direccion1;
        $paciente->telefono = $request->telefono;
        $paciente->telefono1 = $request->telefono1;
        $paciente->telefono2 = $request->telefono2;
        $paciente->numHistoria = $request->numHistoria;
        $paciente->regimen = $request->regimen;
        $paciente->numAfiliacion = $request->numAfiliacion;
        $paciente->fechaAfiliacion = $request->fechaAfiliacion;
        $paciente->turno = $request->turno;
        $paciente->frecuencia = $request->frecuencia;
        $paciente->estado =$estado;
        $paciente->detalleEstado =$detalleEstado;
        $paciente->save();
        return view ('pacientes'); 
    } 
    public function show(Request $request){

        //captura de datos
        $nombre = $request->get('nombre');
        $nombre = strtoupper($nombre);
        $dni = $request->get('dni');
        $turno = $request->get('turno');
        $frecuencia = $request->get('frecuencia');
        $fechaActual = Carbon::now();
        $fechaActual = $fechaActual->format('Y-m-d');

        if($nombre==''&&$dni==''&&$turno==''&&$frecuencia==''){
            $datos['pacientes']=paciente::orderBy('turno','asc')->where('estado','=','activo')->paginate(5);
        }else{
            if($dni==''&&$turno==''&&$frecuencia==''){
                $datos['pacientes']=paciente::where('apellidoPaterno','=',$nombre)->where('estado','=','activo')->paginate(5);
            }
            if($nombre==''&&$turno==''&&$frecuencia==''){
                $datos['pacientes']=paciente::where('dni','=',$dni)->paginate(5);
            }
            if($nombre==''&&$dni==''&&$frecuencia==''){
                $datos['pacientes']=paciente::where('turno','=',$turno)->where('estado','=','activo')->paginate(5);
            }
            if($nombre==''&&$dni==''&&$turno==''){
                $datos['pacientes']=paciente::where('frecuencia','=',$frecuencia)->where('estado','=','activo')->paginate(5);
            }
            if($nombre==''&&$dni==''){
                $datos['pacientes']=paciente::where('frecuencia','=',$frecuencia)->where('turno','=',$turno)->where('estado','=','activo')->paginate(5);
            }
        }
        return view ('pacientes.mostrarPacientes',$datos,['fechaActual'=>$fechaActual]);
    }
    public function destroy($id){

        $pacienteInactivo=paciente::findOrFail($id);
        //paciente::destroy($id);
        //$pacienteInactivo->update(['estado'=>"inactivo"]);
        return view('pacientes.desactivateP', ['paciente'=>$pacienteInactivo]);
        //return redirect('pacientes/show');

    }

    public function edit($id){

        $paciente=paciente::findOrFail($id);

        return view('pacientes.editarPacientes', ['paciente'=>$paciente]);
    }
    public function update(Request $request, $id){

        $datosPaciente = request()->except(['_token','_method']);
        paciente::where('id','=',$id)->update($datosPaciente);
        $paciente=paciente::findOrFail($id);
        return view('pacientes', compact('paciente'));
    }
    
}
