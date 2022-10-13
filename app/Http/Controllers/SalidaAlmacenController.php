<?php

namespace App\Http\Controllers;

use App\Models\salidaAlmacen;
use App\Models\producto;
use Illuminate\Http\Request;

class SalidaAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSalida($id)
    {
        $producto = producto::findOrFail($id);

        return view('salidaAlmacen.crearSalidaAlmacen', ['producto' => $producto]);
    }
    public function create()
    {
        return view('salidaAlmacen.crearSalidaAlmacen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reponsableA' => 'required',
            'responsable' => 'required',
            'fechaSalida' => 'required',
            'numSalida' => 'required',
            'areaRecepcion' => 'nullable',
            'recepcionista' => 'nullable',
            'areaDestino' => 'nullable',
            'detalle' => 'nullable'
        ]);

        $salidaAlmacen = new salidaAlmacen();
        $salidaAlmacen->reponsableA = $request->reponsableA;
        $salidaAlmacen->responsable = $request->responsable;
        $salidaAlmacen->fechaSalida = $request->fechaSalida;
        $salidaAlmacen->numSalida = $request->numSalida;
        $salidaAlmacen->areaRecepcion = $request->areaRecepcion;
        $salidaAlmacen->recepcionista = $request->recepcionista;
        $salidaAlmacen->areaDestino = $request->areaDestino;
        $salidaAlmacen->detalle = $request->detalle;
        $salidaAlmacen->save();


        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'asc')->paginate(5);
        return view('salidaAlmacen.mostrarSalidaAlmacen');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'asc')->paginate(5);
        return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salidaAlmacen = salidaAlmacen::findOrFail($id);
        return view('salidaAlmacen.editSalidaAlmacen', ['salidaAlmacen' => $salidaAlmacen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosSalida = request()->except(['_token', '_method']);
        salidaAlmacen::where('id', '=', $id)->update($datosSalida);
        $salidaAlmacen = salidaAlmacen::findOrFail($id);
        return view('ingresoAlmacen.ingresoAlmacen', compact('salidaAlmacen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        salidaAlmacen::destroy($id);
        return redirect('salidaAlmacen');
    }
}
