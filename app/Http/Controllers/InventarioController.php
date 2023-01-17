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
    //MUESTRA LOS PRODUCTOS EN STOCK MAYOR A 0
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
        //MUESTRA LOS MOVIMIENTOS POR PRODUCTO, HACE UN FILTRADO POR INGRESOS Y SALIDAS INCLUYENDO SALIDAS UNITARIAS
        //MANDA EL FILTRADO EN 2 ARRAYS DE ENTRADAS Y SALIDAS
        $producto = producto::findOrFail($id);
        $ingresos = detalleIngresoAlmacen::where('product_id', '=', $producto->id)->get();
        $salidas = detalleSalidaAlmacen::where('product_id', '=', $producto->id)->where('salida_id', '!=', null)->get();
        $salidasUnitarias = detalleSalidaAlmacen::where('product_id', '=', $producto->id)->where('salida_id', '=', null)->get();
        $devoluciones = detalleDevolucionAlmacen::where('product_id', '=', $producto->id);

        $ingresosReales = array();
        $salidasReales = array();
        //DENTRO DE LOS FILTRADOS SE AGREGAN DATOS DE LA FACTURA A LA QUE PERTENECEN Y PERSONAL RESPONSABLE
        foreach ($ingresos as $indice) {
            $factura = ingresoAlmacen::where('id', '=', $indice->factura_id)->first();
            $factura->cantidad = $indice->cantidadIngresada;
            $factura->lote = $indice->lote;
            $factura->fechaVencimiento = $indice->fechaVencimiento;
            array_push($ingresosReales, $factura);
        }
        foreach ($salidas as $indice) {
            $salida = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            $salida->cantidad = $indice->cantidad;
            $salida->des = $indice->destino;
            array_push($salidasReales, $salida);
        }
        foreach ($salidasUnitarias as $indice) {
            array_push($salidasReales, $indice);
        }
        foreach ($devoluciones as $indice) {
            $devolucion = devolucionAlmacen::where('id', '=', $indice->devolucion_id)->first();
            $devolucion->numFactura = "AAA";
            $devolucion->cantidad = $indice->cantidadDevuelta;
            array_push($ingresosReales, $devolucion);
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
    //REGRESA A LA LISTA DE PRODUCTOS EN INVENTARIO
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
    //DESCARGA LA LISTA DE MOVIMIENTOS, ESTE NO SE HIZO ENE L CONTROLADOR DEL EXCEL DEBIDO A LAS LIMITACIONES DE LOS EXPORT
    //Y PORQUE SON DATOS COMBINADOS DE DISTINTAS TABLAS
    public function download($id)
    {
        //CABECERA DEL EXCEL
        $data=array(
            array("NRO","CODIGO INTERNO DE OPERACION","CANTIDAD","FECHA","TIPO DE OPERACION", "LOTE", "FECHA DE VENCIMIENTO","PERSONAL ENCARGADO", "DESTINO")
        );
        //CUERPO DEL EXCEL
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
                $factura->entrada = "INGRESO",
                $factura->lote = $indice->lote,
                $factura->fechaVencimiento = $indice->fechaVencimiento,
                $factura->personal = $factura->usuario
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
                $salidas->entrada = "SALIDA",
                $salidas->lote = 'SL',
                $salidas->fechaVencimiento = 'SF',
                $salidas->personal = $salida->recepcionista,
                $salida->des = $indice->destino
            ));
            $c = $c + 1;
        }
        foreach ($salidasUnitarias as $indice){
            $salida = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            array_push($data, array(
                $salidasUnitarias->id = $c,
                $salidasUnitarias->numFactura = $indice->guiaInterna,
                $salidasUnitarias->cantidad = $indice->cantidad,
                $salidasUnitarias->fecha = substr($indice->updated_at, 0, 10),
                //$salidasUnitarias->fecha = $indice->updated_at,

                $salidasUnitarias->entrada = "SALIDA UNITARIA",
                $salidasUnitarias->lote = 'SL',
                $salidasUnitarias->fechaVencimiento = 'SF',
                $salidasUnitarias->personal = '',
                $salidasUnitarias->des = $indice->destino
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
                $devoluciones->entrada = "DEVOLUCION",
                $devoluciones->lote = 'SL',
                $salidasUnitarias->fechaVencimiento = 'SF',
                $salidasUnitarias->personal = $devolucion->personalD

            ));
            
            $c = $c + 1;
        }
        $export = new MovimientosExport($data);
        return Excel::download($export, 'Movimientos '.$producto->nombreProd.'.xlsx');
    }
}
