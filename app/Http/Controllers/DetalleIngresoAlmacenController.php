<?php

namespace App\Http\Controllers;

use App\Models\detalleIngresoAlmacen;
use Illuminate\Http\Request;
use App\Models\proveedor;
use App\Models\producto;
use App\Models\ingresoAlmacen;
use Illuminate\Support\Arr;

class DetalleIngresoAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('detalleIngresoAlmacen.detalleIngresoAlmacen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createMedica(Request $request, $id)
    {
        $factura = ingresoAlmacen::findOrFail($id);

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        //$validator = $request->get('cantidadIngresada'); 
        if ($request->product_id!='') {
            $detalleIngresoAlmacen = new detalleIngresoAlmacen();
            $detalleIngresoAlmacen->factura_id = $id;
            $detalleIngresoAlmacen->product_id = $request->product_id;
            $detalleIngresoAlmacen->cantidadIngresada = $request->cantidadIngresada;
            $detalleIngresoAlmacen->unidadMedida = $request->unidadMedida;
            $detalleIngresoAlmacen->PrecioTotal = $request->PrecioTotal;
            $detalleIngresoAlmacen->PrecioUnitario = $request->PrecioUnitario;
            $detalleIngresoAlmacen->moneda = $request->moneda;
            $detalleIngresoAlmacen->detalle = $request->detalle;
            $detalleIngresoAlmacen->save();

        }
        return view('detalleIngresoAlmacen.crearDetalleIngresoAlmacen', $productoAll,['factura'=>$factura]);
    }
    public function create(Request $request, $id)
    {

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        return view('detalleIngresoAlmacen.crearDetalleIngresoAlmacen', $productoAll);
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
            'product_id' => 'required',
            'cantidadIngresada' => 'required',
            'unidadMedida' => 'required',
            'PrecioTotal' => 'required',
            'PrecioUnitario' => 'required',
            'moneda' => 'required',
            'detalle' => 'nullable'
        ]);
        $detalleIngresoAlmacen = new detalleIngresoAlmacen();

        $detalleIngresoAlmacen->product_id = $request->product_id;
        $detalleIngresoAlmacen->cantidadIngresada = $request->cantidadIngresada;
        $detalleIngresoAlmacen->unidadMedida = $request->unidadMedida;
        $detalleIngresoAlmacen->PrecioTotal = $request->PrecioTotal;
        $detalleIngresoAlmacen->PrecioUnitario = $request->PrecioUnitario;
        $detalleIngresoAlmacen->moneda = $request->moneda;
        $detalleIngresoAlmacen->detalle = $request->detalle;

        $detalleIngresoAlmacen->save();



        return view('detalleIngresoAlmacen.crearDetalleIngresoAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(detalleIngresoAlmacen $detalleIngresoAlmacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalleIngresoAlmacen $detalleIngresoAlmacen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalleIngresoAlmacen $detalleIngresoAlmacen)
    {
        //
    }
}
