<?php

namespace App\Http\Controllers;

use App\Models\devolucionAlmacen;
use App\Models\detalleDevolucionAlmacen;
use App\Models\producto;
use Illuminate\Http\Request;

class DetalleDevolucionAlmacenController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalleDevolucionAlmacen  $detalleDevolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(detalleDevolucionAlmacen $detalleDevolucionAlmacen)
    {
        //
    }
    public function showD($id)
    {
        $devolucion = devolucionAlmacen::where('id', '=', $id)->first();
        $detalleDevolucion['detalleDevolucion'] = detalleDevolucionAlmacen::where('devolucion_id', '=', $devolucion->id)->paginate(10);
        return view('detalleDevoluciones.mostrarDetalleDevolucion', $detalleDevolucion, ['devolucion' => $devolucion]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalleDevolucionAlmacen  $detalleDevolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalle = detalleDevolucionAlmacen::findOrFail($id);
        return view('detalleDevoluciones.editDetalleDevolucion', ['detalle' => $detalle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalleDevolucionAlmacen  $detalleDevolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDetalle = request()->except(['_token', '_method']);
        $stockReal = $request->cantidadDevuelta;
        $detalleD = detalleDevolucionAlmacen::where('id', '=', $id)->first();
        $stockInicial = $detalleD->cantidadDevuelta;
        $dif = $stockInicial - $stockReal;

        $producto = producto::where('id','=',$detalleD->product_id)->first();
        if($dif>0){
            $dif * -1;
            $stock = $producto->stock - $dif;
            producto::where('id', '=', $detalleD->product_id)->update(['stock'=>$stock,]);

            
        }if($dif<0){
            $stock = $producto->stock + abs($dif);
            producto::where('id', '=', $detalleD->product_id)->update(['stock'=>$stock,]);
        }
        detalleDevolucionAlmacen::where('id', '=', $id)->update($datosDetalle);

        $devolucion = devolucionAlmacen::where('id', '=', $detalleD->devolucion_id)->first();
        $detalleDevolucion['detalleDevolucion'] = detalleDevolucionAlmacen::where('devolucion_id', '=', $devolucion->id)->paginate(10);
        return view('detalleDevoluciones.mostrarDetalleDevolucion', $detalleDevolucion, ['devolucion' => $devolucion]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalleDevolucionAlmacen  $detalleDevolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleD = detalleDevolucionAlmacen::where('id', '=', $id)->first();
        $producto = producto::where('id','=',$detalleD->product_id)->first();
        $stock = $producto->stock - $detalleD->cantidadDevuelta;
        producto::where('id', '=', $detalleD->product_id)->update(['stock'=>$stock]);


        $devolucionCabera = devolucionAlmacen::where('id', '=', $detalleD->devolucion_id)->first();

        detalleDevolucionAlmacen::destroy($id);
        $detalleDevolucion['detalleDevolucion'] = detalleDevolucionAlmacen::where('devolucion_id', '=', $devolucionCabera->id)->paginate(10);
        return view('detalleDevoluciones.mostrarDetalleDevolucion', $detalleDevolucion, ['devolucion' => $devolucionCabera]);
    }
    public function refresh($id)
    {
        $devolucion = devolucionAlmacen::where('id', '=', $id)->first();
        $detalleDevolucion['detalleDevolucion'] = detalleDevolucionAlmacen::where('devolucion_id', '=', $devolucion->id)->paginate(10);
        return view('detalleDevoluciones.mostrarDetalleDevolucion', $detalleDevolucion, ['devolucion' => $devolucion]);
    }

}
