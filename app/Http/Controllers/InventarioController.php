<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use App\Models\detalleIngresoAlmacen;
use App\Models\detalleSalidaAlmacen;
use App\Models\devolucionAlmacen;
use App\Models\detalleDevolucionAlmacen;
use App\Models\producto;
use App\Models\ingresoAlmacen;
use App\Models\salidaAlmacen;
use App\Exports\MovimientosExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('almacen.indexAlmacen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productoAll['productoAll'] = producto::All();
        return view('almacen.crearAlmacen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('almacen.crearAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $codigoProd = $request->get('codigoProd');
        $categoria_id = $request->get('categoria_id');
        if ($codigoProd == '' && $categoria_id == '') {
            $productoAll['productoAll'] = producto::orderBy('id', 'desc')->where('stock', '>', 0)->paginate(10);
        } else {
            if ($categoria_id == '') {
                $productoAll['productoAll'] = producto::where('codigoProd', '=', $codigoProd)->where('stock', '>', 0)->paginate(10);
            }
            if ($codigoProd == '') {
                $productoAll['productoAll'] = producto::where('categoria_id', '=', $categoria_id)->where('stock', '>', 0)->paginate(10);
            }
        }
        $productos = producto::where('stock', '>', '0')->get();
        $total = 0;
        foreach ($productos as $indice) {
            $total = $total + ($indice->precioProm * $indice->stock);
        }

        return view('almacen.mostrarAlmacen', $productoAll)->with('total', $total);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = producto::findOrFail($id);
        $ingresos = detalleIngresoAlmacen::where('product_id', '=', $producto->id)->get();
        $salidas = detalleSalidaAlmacen::where('product_id', '=', $producto->id)->where('salida_id', '!=', null)->get();
        $salidasUnitarias = detalleSalidaAlmacen::where('product_id', '=', $producto->id)->where('salida_id', '=', null)->get();
        $devoluciones = detalleDevolucionAlmacen::where('product_id', '=', $producto->id);

        $ingresosReales = array();
        $salidasReales = array();
        $devolucionesReales = array();
        $salidasU = array();
        foreach ($ingresos as $indice) {
            $factura = ingresoAlmacen::where('id', '=', $indice->factura_id)->first();
            $factura->cantidad = $indice->cantidadIngresada;
            array_push($ingresosReales, $factura);
        }
        foreach ($salidas as $indice) {
            $salida = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            $salida->cantidad = $indice->cantidad;
            array_push($salidasReales, $salida);
        }
        foreach ($salidasUnitarias as $indice) {
            //$factura = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            //$factura->cantidad = $indice->cantidad;
            array_push($salidasReales, $indice);
        }
        foreach ($devoluciones as $indice) {
            $devolucion = devolucionAlmacen::where('id', '=', $indice->salida_id)->first();
            $devolucion->cantidad = $indice->cantidadDevuelta;
            array_push($devolucionesReales, $factura);
        }
        return view('almacen.editAlmacen', ['ingresosReales' => $ingresosReales], ['salidasReales' => $salidasReales])->with('producto', $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventario $inventario)
    {
        //
    }
    public function back()
    {
        $productoAll['productoAll'] = producto::orderBy('id', 'desc')->where('stock', '>', 0)->paginate(10);
        $productos = producto::where('stock', '>', '0')->get();
        $total = 0;
        foreach ($productos as $indice) {
            $total = $total + ($indice->precioProm * $indice->stock);
        }
        return view('almacen.mostrarAlmacen', $productoAll)->with('total', $total);
    }
    public function download($id)
    {
        $data=array(
            array("NRO","CODIGO INTERNO DE OPERACION","CANTIDAD","FECHA","TIPO DE OPERACION")
        );
        $producto = producto::findOrFail($id);
        $ingresos = detalleIngresoAlmacen::where('product_id', '=', $producto->id)->get();
        $salidas = detalleSalidaAlmacen::where('product_id', '=', $producto->id)->where('salida_id', '!=', null)->get();
        $salidasUnitarias = detalleSalidaAlmacen::where('product_id', '=', $producto->id)->where('salida_id', '=', null)->get();
        $devoluciones = detalleDevolucionAlmacen::where('product_id', '=', $producto->id)->get();
        $c = 1;
        foreach ($ingresos as $indice){
            $factura = ingresoAlmacen::where('id', '=', $indice->factura_id)->first();
            array_push($data, array(
                $factura->id = $c,
                $factura->numFactura = $factura->numFactura,
                $factura->cantidad = $indice->cantidadIngresada,
                $factura->fecha = $factura->fechaIngreso,
                $factura->entrada = "INGRESO"
            ));
            $c = $c + 1;
        }
        foreach ($salidas as $indice){
            $salida = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            array_push($data, array(
                $salidas->id = $c,
                $salidas->numFactura = $salida->numSalida,
                $salidas->cantidad = $indice->cantidad,
                $salidas->fecha = $salida->fechaSalida,
                $salidas->entrada = "SALIDA"
            ));
            $c = $c + 1;
        }
        foreach ($salidasUnitarias as $indice){
            $salida = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            array_push($data, array(
                $salidasUnitarias->id = $c,
                $salidasUnitarias->numFactura = $indice->guiaInterna,
                $salidasUnitarias->cantidad = $indice->cantidad,
                $salidasUnitarias->fecha = $indice->updated_at,
                $salidasUnitarias->entrada = "SALIDA UNITARIA"
            ));
            
            $c = $c + 1;
        }
        foreach ($devoluciones as $indice){
            $devolucion = devolucionAlmacen::where('id', '=', $indice->devolucion_id)->first();
            array_push($data, array(
                $devoluciones->id = $c,
                $devoluciones->numDevolucion = $devolucion->numDevolucion,
                $devoluciones->cantidad = $indice->cantidadDevuelta,
                $devoluciones->fecha = $devolucion->fechaDevolucion,
                $devoluciones->entrada = "DEVOLUCION"
            ));
            
            $c = $c + 1;
        }
        $export = new MovimientosExport($data);
        return Excel::download($export, 'Movimientos '.$producto->nombreProd.'.xlsx');
    }
}
