<?php

namespace App\Http\Controllers;

use App\Models\ingresoAlmacen;
use Illuminate\Http\Request;
use App\Models\proveedor;
use App\Models\producto;
use App\Models\detalleIngresoAlmacen;
use Illuminate\Support\Arr;

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
        $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(5);
        return view('ingresoAlmacen.crearIngresoAlmacen', $proveedorAll);
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
            'usuario' => 'required',
            'proveedor_id' => 'required',
            'fechaIngreso' => 'required',
            'fechaEmision' => 'required',
            'fechaVencimiento' => 'required',
            'numFactura' => 'required|unique:ingreso_almacens',
            'estadoPaga' => 'required|max:1', //1=pagado, 0=no pagado
            'detalle' => 'nullable'
        ]);


        $ingresoAlmacen = new ingresoAlmacen();

        $ingresoAlmacen->usuario = $request->usuario;
        $ingresoAlmacen->proveedor_id = $request->proveedor_id;
        $ingresoAlmacen->fechaIngreso = $request->fechaIngreso;
        $ingresoAlmacen->fechaEmision = $request->fechaEmision;
        $ingresoAlmacen->fechaVencimiento = $request->fechaVencimiento;
        $ingresoAlmacen->numFactura = $request->numFactura;

        $ingresosAll = ingresoAlmacen::All();
        if ($ingresosAll->isEmpty() == true) {
            $numingreso = "I" . substr(str_repeat(0, 6) . ingresoAlmacen::All()->count() + 1, -5);
        } else {
            $ultimo = ingresoAlmacen::orderBy('id', 'desc')->first();
            $nuevo = $ultimo->id + 1;
            $numingreso = "I" . substr(str_repeat(0, 6) . $nuevo, -5);
        }
        $ingresoAlmacen->numIngreso = $numingreso;

        $ingresoAlmacen->estadoPaga = $request->estadoPaga;
        $ingresoAlmacen->total = 0;
        $ingresoAlmacen->detalle = $request->detalle;

        $ingresoAlmacen->save();
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $numFactura = $request->get('numFactura');
        if ($numFactura != '') {
            $factura = ingresoAlmacen::where('numFactura', '=', $numFactura)->first();
            if ($factura == null) {;
                $entradasAll['entradasAll'] = null;
                return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
            } else {
                $entradasAll['entradasAll'] = ingresoAlmacen::where('numFactura', '=', $numFactura)->paginate(10);
                return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
            }
        } else {
            $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        }

        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedorAll['proveedorAll'] = proveedor::All();
        $ingresoAlmacen = ingresoAlmacen::findOrFail($id);
        return view('ingresoAlmacen.editIngresoAlmacen', ['ingresoAlmacen' => $ingresoAlmacen], $proveedorAll);
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
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $ingreso = detalleIngresoAlmacen::where('factura_id', '=', $id)->get();
        if (count($ingreso) == 0) {
            ingresoAlmacen::destroy($id);
        } else {
            foreach ($ingreso as $i) {

                $stockInicial = $i->cantidadIngresada;
                $producto = producto::where('id', '=', $i->product_id)->first();
                $stock = $producto->stock - $stockInicial;
                producto::where('id', '=', $producto->id)->update(['stock' => $stock]);

                $factura = ingresoAlmacen::where('id', '=', $i->factura_id)->first();
                $prodtotal = $factura->total - $i->PrecioTotal;
                ingresoAlmacen::where('id', '=', $factura->id)->update(['total' => $prodtotal]);

                detalleIngresoAlmacen::destroy($i->id);
            }
            ingresoAlmacen::destroy($id);
        }
        //ingresoAlmacen::destroy($id);
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }
    public function refresh(){
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }
}
