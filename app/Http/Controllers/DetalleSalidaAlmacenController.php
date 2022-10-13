<?php

namespace App\Http\Controllers;

use App\Models\detalleSalidaAlmacen;
use Illuminate\Http\Request;
use App\Models\salidaAlmacen;
use App\Models\producto;

class DetalleSalidaAlmacenController extends Controller
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
        $salida_id = salidaAlmacen::findOrFail($id);

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        //$validator = $request->get('cantidadIngresada'); 
        return view('detalleSalidaAlmacen.crearDetalleSalidaAlmacen', $productoAll, ['salida_id' => $salida_id]);
    }
    public function create()
    {
        
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        return view('detalleSalidaAlmacen.crearDetalleSalidaAlmacen', $productoAll);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*
        //REDUCIR STOCK
        $producto = producto::where('id', '=', $request->product_id)->first();
        $stock = $producto->stock - $request->cantidad;
        producto::where('id', '=', $request->product_id)->update(['stock' => $stock,]);

        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);

        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(detalleSalidaAlmacen $detalleSalidaAlmacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit(detalleSalidaAlmacen $detalleSalidaAlmacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalleSalidaAlmacen $detalleSalidaAlmacen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalleSalidaAlmacen $detalleSalidaAlmacen)
    {
        //
    }
}
