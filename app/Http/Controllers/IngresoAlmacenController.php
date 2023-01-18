<?php

namespace App\Http\Controllers;

use App\Models\ingresoAlmacen;
use Illuminate\Http\Request;
use App\Models\proveedor;
use App\Models\producto;
use App\Models\detalleIngresoAlmacen;
use Illuminate\Support\Arr;
//CLASE QUE MANEJA LA CABECERA DE LAS FACTURAS COMO INGRESOS
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

        //GUARDADO DE DATOS
        $ingresoAlmacen = new ingresoAlmacen();

        $ingresoAlmacen->usuario = $request->usuario;
        $ingresoAlmacen->proveedor_id = $request->proveedor_id;
        $ingresoAlmacen->fechaIngreso = $request->fechaIngreso;
        $ingresoAlmacen->fechaEmision = $request->fechaEmision;
        $ingresoAlmacen->fechaVencimiento = $request->fechaVencimiento;
        $ingresoAlmacen->numFactura = $request->numFactura;
        //GENERADOR DE CODIGO IDENTIFICADOR DE INGRESO
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
        //MUESTRA LA LISTA DE FACTURAS Y BUSQUEDA DE FACTURAS
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
        //ENVIA LA LISTA DE LOS PROVEEDORES PARA EL EDIT
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
        //ACTUALIZA LOS DATOS DE LA CABECERA
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
        //DESTRUYE LA CABECERA Y LOS DETALLES INGRESADOS (ELIMINACION EN CADENA (CUIDADO))
        $ingreso = detalleIngresoAlmacen::where('factura_id', '=', $id)->get();
        //ACTUALIZACION DE STOCK CON ELIMINACION EN CADENA
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
    //ACTUALIZA LA FACTURA INGRESADA
    public function refresh(){
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }
}
