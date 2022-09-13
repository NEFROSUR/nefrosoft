<?php

namespace App\Http\Controllers;

use App\Models\ingresoAlmacen;
use Illuminate\Http\Request;
use App\Models\proveedor;
use App\Models\producto;

class IngresoAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ingresoAlmacen.ingresoAlmacen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(5);
        return view('ingresoAlmacen.crearIngresoAlmacen',$proveedorAll,$productoAll);
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
        'usuario' =>'required',
        'product_id' => 'required',
        'proveedor_id' => 'required',
        'fechaIngreso' => 'required',
        'fechaEmision' => 'required',
        'fechaVencimiento' => 'required',
        'numFactura' => 'required',
        'numIngreso' => 'required',
        'cantidadIngresada' => 'required',
        'unidadMedida' => 'required',
        'PrecioTotal' => 'required',
        'PrecioUnitario' => 'required',
        'moneda' => 'required',
        'estadoPaga' => 'required|max:1',//1=pagado, 0=no pagado
        'detalle' => 'nullable'
        ]);


        $ingresoAlmacen = new ingresoAlmacen();

        $ingresoAlmacen->usuario = $request->usuario;
        $ingresoAlmacen->product_id = $request->product_id;
        $ingresoAlmacen->proveedor_id = $request->proveedor_id;
        $ingresoAlmacen->fechaIngreso = $request->fechaIngreso;
        $ingresoAlmacen->fechaEmision = $request->fechaEmision;
        $ingresoAlmacen->fechaVencimiento = $request->fechaVencimiento;
        $ingresoAlmacen->numFactura = $request->numFactura;
        $ingresoAlmacen->numIngreso = $request->numIngreso;
        $ingresoAlmacen->cantidadIngresada = $request->cantidadIngresada;
        $ingresoAlmacen->unidadMedida = $request->unidadMedida;
        $ingresoAlmacen->PrecioTotal = $request->PrecioTotal;
        $ingresoAlmacen->PrecioUnitario = $request->PrecioUnitario;
        $ingresoAlmacen->moneda = $request->moneda;
        $ingresoAlmacen->estadoPaga = $request->estadoPaga;
        $ingresoAlmacen->detalle = $request->detalle;

        $ingresoAlmacen->save();



        return view('ingresoAlmacen.ingresoAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'asc')->paginate(5);
        
        return view('ingresoAlmacen.mostrarIngresoAlmacen',$entradasAll);
        //return view('ingresoAlmacen.mostrarIngresoAlmacen');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresoAlmacen = ingresoAlmacen::findOrFail($id);
        return view('ingresoAlmacen.editIngresoAlmacen', ['ingresoAlmacen' => $ingresoAlmacen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosIngreso = request()->except(['_token', '_method']);
        ingresoAlmacen::where('id', '=', $id)->update($datosIngreso);
        $ingresoAlmacen = ingresoAlmacen::findOrFail($id);
        return view('ingresoAlmacen.ingresoAlmacen', compact('ingresoAlmacen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ingresoAlmacen::destroy($id);
        return redirect('ingresoAlmacen');
    }
}
