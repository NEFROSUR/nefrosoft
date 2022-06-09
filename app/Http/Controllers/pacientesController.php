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
        return view ('pacientes.mostrarPacientes');
        //return response()->json($datosPaciente);
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
            /*if($nombre==''&&$dni==''&&$turno==''&&$frecuencia==''){
                $datos['pacientes']=paciente::where('turno','like',$turno)->paginate(5);
            }*/
            //$datos['pacientes']=paciente::where('turno','like',$turno)->paginate(5);
        }
        //$datos['pacientes']=paciente::orderBy('turno','asc')->paginate(5);
        return view ('pacientes.mostrarPacientes',$datos);
        //return view ('pacientes.mostrarPacientes');
    }
    public function destroy($id){
        paciente::destroy($id);
        return redirect('pacientes');
    }

    public function edit($id){

        $paciente=paciente::findOrFail($id);

        return view('pacientes.editarPacientes', compact('paciente'));
    }
    public function update(Request $request, $id){

        $datosPaciente = request()->except(['_token','method']);
        paciente::where('id','=',$id)->update($datosPaciente);
        $paciente=paciente::findOrFail($id);
        return view('pacientes.editarPacientes', compact('paciente'));

    }
    
        /**$request-> validate([
            'dni'=> 'required|min:8',
            'primerNombre'=>'required|min:1',
            'otroNombre'=>'required|min:1',
            'apellidoPaterno'=>'required|min:1',
            'apellidoMaterno'=>'required|min:1',
            'direccion'=>'required|min:5',
            'telefono'=>'required|min:9',
            'turno'=>'required|min:1',

        ]); 
        $paciente = new paciente;
        $paciente-> dni = $request -> dni;
        $paciente-> primerNombre= $request -> primerNombre;
        $paciente-> otroNombre= $request -> otroNombre;
        $paciente->apellidoPaterno= $request -> apellidoPaterno;
        $paciente->apellidoMaterno= $request -> apellidoMaterno;
        $paciente->direccion= $request -> direccion;
        $paciente->telefono= $request -> telefono;
        $paciente->turno= $request -> turno;
        $paciente->save();
        return redirect()->route('crearPaciente')->with('success','Paciente guardado correctamente');*/
}
