<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\profesional;

//CLASE CONTROLADORA PARA EL PERSONAL (MEDICOS YU MULTIDISCIPLINARIOS)
class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('profesional'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesionales.crearProfesionales');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //GUARDA LOS DATOS DEL PERSONAL
    public function store(Request $request)
    {
        $request->validate([
            'dniP' => 'required|unique:profesionals',
            'primerNombreP' => 'required|string',
            'otroNombreP' => 'nullable|string',
            'apellidoPaternoP' => 'required|string',
            'apellidoMaternoP' => 'required|string',
            'colegiatura' => 'required|numeric|min:4',
            'telefonoP' => 'nullable|numeric|min:9',
            'direccionP' => 'required|string',
        ]);
        $pN = strtolower($request->primerNombreP);
        $sN = strtolower($request->otroNombreP);
        $pA = strtolower($request->apellidoPaternoP);
        $sA = strtolower($request->apellidoMaternoP);

        $profesional = new Profesional();
        $id =  Profesional::all()->count() +1;
        $profesional->id = $id;
        $profesional->dniP = $request->dniP;
        $profesional->primerNombreP = ucfirst($pN);
        $profesional->otroNombreP = ucfirst($sN);
        $profesional->apellidoPaternoP = ucfirst($pA);
        $profesional->apellidoMaternoP = ucfirst($sA);
        $profesional->colegiatura = $request->colegiatura;
        $profesional->telefonoP = $request->telefonoP;
        $profesional->direccionP = $request->direccionP;
        $profesional->especialidad = $request->especialidad;
        $profesional->save();

        $doctoresAll['doctoresAll']=profesional::orderBy('id','asc')->paginate(5);
        return view ('profesionales.mostrarProfesionales',$doctoresAll);

        /*$datosProfesional = request()->except('_token');
        profesional::insert($datosProfesional);

        return view ('main');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    //MUESTRA LA LISTA DEL PERSONAL Y TIENE UN FILTRADO POR NOMBRE, DNI Y ESPECIALIDAD
    public function show(Request $request)
    {
        $nombre = $request->get('nombre');
        $dni = $request->get('dni');
        $especialidad = $request->get('especialidad');

        if($nombre==''&&$dni==''&&$especialidad==''){
            $doctoresAll['doctoresAll']=profesional::orderBy('id','asc')->paginate(5);
        }else{
            if($dni==''&&$especialidad==''){
                $doctoresAll['doctoresAll']=profesional::where('primerNombreP','=',$nombre)->paginate(5);
            }
            if($nombre==''&&$especialidad==''){
                $doctoresAll['doctoresAll']=profesional::where('dniP','=',$dni)->paginate(5);
            }
            if($nombre==''&&$dni==''){
                $doctoresAll['doctoresAll']=profesional::where('especialidad','=',$especialidad)->paginate(5);
            };
        }


        return view ('profesionales.mostrarProfesionales',$doctoresAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesional=Profesional::findOrFail($id);

        return view('profesionales.editarProfesionales', ['profesional'=>$profesional]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    //ACTUALIZA LOS DATOS DEL PERSONAL
    public function update(Request $request, $id)
    {
        $datosProfesional = request()->except(['_token','_method']);
        Profesional::where('id','=',$id)->update($datosProfesional);
        $profesional=Profesional::findOrFail($id);
        return view('profesional', compact('profesional'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    //ELIMINA AL PERSONAL (SE RECOMIENDA ELIMINAR LA OPCION EN FRONT)
    public function destroy($id)
    {
        profesional::destroy($id);
        return redirect('profesional');
    }
}
