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
    //CARGA LA LISTA DE DETALLE DE DEVOLUCIONES
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
    //ACTUALIZACION DE DETALLE DEVOLUCION CON ACTUALIZACION DE STOCK
    public function update(Request $request, $id)
    {
        $datosDetalle = request()->except(['_token', '_method']);
        $stockReal = $request->cantidadDevuelta;
        $detalleD = detalleDevolucionAlmacen::where('id', '=', $id)->first();
        $stockInicial = $detalleD->cantidadDevuelta;
        $dif = $stockInicial - $stockReal; //verificacion de positividad o negatividad de diferencia del stock 
        //dependiendo de si el stock es positivo o negativo se suma o se resta del inventario 
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
        //retorno a la vista detalle de devolucion
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
    //METODO PARA ELIMINAR EL REGISTRO DE DETALLE DE DEVOLUCION
    public function destroy($id)
    {
        $detalleD = detalleDevolucionAlmacen::where('id', '=', $id)->first();
        $producto = producto::where('id','=',$detalleD->product_id)->first();
        //ACTUALIZACION DEL STOCK EN INVENTARIO 
        $stock = $producto->stock - $detalleD->cantidadDevuelta;
        producto::where('id', '=', $detalleD->product_id)->update(['stock'=>$stock]);


        $devolucionCabera = devolucionAlmacen::where('id', '=', $detalleD->devolucion_id)->first();

        detalleDevolucionAlmacen::destroy($id); //DESTRUCCION DEL REGISTRO
        $detalleDevolucion['detalleDevolucion'] = detalleDevolucionAlmacen::where('devolucion_id', '=', $devolucionCabera->id)->paginate(10);
        return view('detalleDevoluciones.mostrarDetalleDevolucion', $detalleDevolucion, ['devolucion' => $devolucionCabera]);
    }
    //METODO PARA REFRESCAR PAGINA Y ACTUALIZAR DATOS
    public function refresh($id)
    {
        $devolucion = devolucionAlmacen::where('id', '=', $id)->first();
        $detalleDevolucion['detalleDevolucion'] = detalleDevolucionAlmacen::where('devolucion_id', '=', $devolucion->id)->paginate(10);
        return view('detalleDevoluciones.mostrarDetalleDevolucion', $detalleDevolucion, ['devolucion' => $devolucion]);
    }

}
