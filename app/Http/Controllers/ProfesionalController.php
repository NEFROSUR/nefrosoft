<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\profesional;


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
    public function store(Request $request)
    {
        $datosProfesional = request()->except('_token');
        profesional::insert($datosProfesional);

        return view ('main');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
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
    public function edit(profesional $profesional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profesional $profesional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        profesional::destroy($id);
        return redirect('profesional');
    }
}
