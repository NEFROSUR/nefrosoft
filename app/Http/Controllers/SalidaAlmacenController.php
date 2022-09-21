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

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        //$validator = $request->get('cantidadIngresada'); 
        return view('detalleIngresoAlmacen.crearDetalleIngresoAlmacen', $productoAll, ['producto' => $producto]);
    }
    public function create()
    {

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        return view('salidaAlmacen.crearSalidaAlmacen', $productoAll);
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
            'cantidad' => 'required',
            'um' => 'required',
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
        $salidaAlmacen->cantidad = $request->cantidad;
        $salidaAlmacen->um = $request->um;
        $salidaAlmacen->areaRecepcion = $request->areaRecepcion;
        $salidaAlmacen->recepcionista = $request->recepcionista;
        $salidaAlmacen->areaDestino = $request->areaDestino;
        $salidaAlmacen->detalle = $request->detalle;
        $salidaAlmacen->save();

        $producto = producto::where('id','=',$request->product_id)->first();
        //REDUCIR STOCK
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(salidaAlmacen $salidaAlmacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit(salidaAlmacen $salidaAlmacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salidaAlmacen $salidaAlmacen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(salidaAlmacen $salidaAlmacen)
    {
        //
    }
}
