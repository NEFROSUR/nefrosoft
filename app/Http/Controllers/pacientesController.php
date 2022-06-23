<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paciente;

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
        $datosPaciente = request()->except('_token');
        paciente::insert($datosPaciente);

        return view ('main');
    } 
    public function show(Request $request){

        //captura de datos
        $nombre = $request->get('nombre');
        $dni = $request->get('dni');
        $turno = $request->get('turno');
        $frecuencia = $request->get('frecuencia');
        
        //$datos['pacientes']=paciente::where('primerNombre','like','%nombre%')->paginate(5);
        if($nombre==''&&$dni==''&&$turno==''&&$frecuencia==''){
            $datos['pacientes']=paciente::orderBy('turno','asc')->paginate(5);
        }else{
            if($dni==''&&$turno==''&&$frecuencia==''){
                $datos['pacientes']=paciente::where('primerNombre','=',$nombre)->paginate(5);
            }
            if($nombre==''&&$turno==''&&$frecuencia==''){
                $datos['pacientes']=paciente::where('dni','=',$dni)->paginate(5);
            }
            if($nombre==''&&$dni==''&&$frecuencia==''){
                $datos['pacientes']=paciente::where('turno','=',$turno)->paginate(5);
            }
            if($nombre==''&&$dni==''&&$turno==''){
                $datos['pacientes']=paciente::where('frecuencia','=',$frecuencia)->paginate(5);
            };
        }
        return view ('pacientes.mostrarPacientes',$datos);
    }
    public function destroy($id){
        paciente::destroy($id);
        return redirect('pacientes');
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
