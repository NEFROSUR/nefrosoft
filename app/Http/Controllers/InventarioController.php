<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use App\Models\detalleIngresoAlmacen;
use App\Models\detalleSalidaAlmacen;
use App\Models\producto;
use App\Models\ingresoAlmacen;
use App\Models\salidaAlmacen;
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
            $productoAll['productoAll'] = producto::orderBy('id', 'asc')->where('stock', '>', 0)->paginate(10);
        } else {
            if ($categoria_id == '') {
                $productoAll['productoAll'] = producto::where('codigoProd', '=', $codigoProd)->where('stock', '>', 0)->paginate(10);
            }
            if ($codigoProd == '') {
                $productoAll['productoAll'] = producto::where('categoria_id', '=', $categoria_id)->where('stock', '>', 0)->paginate(10);
            }
        }
        $productos = producto::where('stock', '>', '0')->get();
        $total=0;
        foreach($productos as $indice){
            $total = $total+($indice->precioProm * $indice->stock);
        }

        return view('almacen.mostrarAlmacen', $productoAll)->with('total',$total);
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
        
        $ingresosReales = array();
        $salidasReales = array();
        $salidasU = array();
        foreach($ingresos as $indice){
            $factura = ingresoAlmacen::where('id', '=', $indice->factura_id)->first();
            $factura->cantidad = $indice->cantidadIngresada;
            array_push($ingresosReales, $factura);
        }
        foreach($salidas as $indice){
            $factura = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            $factura->cantidad = $indice->cantidad;
            array_push($salidasReales, $factura);
        }
        foreach($salidasUnitarias as $indice){
            //$factura = salidaAlmacen::where('id', '=', $indice->salida_id)->first();
            //$factura->cantidad = $indice->cantidad;
            array_push($salidasReales, $indice);
        }


        return view('almacen.editAlmacen',['ingresosReales' => $ingresosReales], ['salidasReales' => $salidasReales])->with('producto',$producto);

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
}
