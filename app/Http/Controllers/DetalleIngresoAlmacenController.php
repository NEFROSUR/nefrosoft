<?php

namespace App\Http\Controllers;

use App\Models\detalleIngresoAlmacen;
use Illuminate\Http\Request;
use App\Models\proveedor;
use App\Models\producto;
use App\Models\ingresoAlmacen;
use App\Models\inventario;
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
    public function createMedica($id)
    {
        $factura = ingresoAlmacen::findOrFail($id);

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        //$validator = $request->get('cantidadIngresada'); 
        return view('detalleIngresoAlmacen.crearDetalleIngresoAlmacen', $productoAll, ['factura' => $factura]);
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
        $detalleIngresoAlmacen->factura_id = $request->factura_id;
        $detalleIngresoAlmacen->product_id = $request->product_id;
        $detalleIngresoAlmacen->cantidadIngresada = $request->cantidadIngresada;
        $detalleIngresoAlmacen->unidadMedida = $request->unidadMedida;
        $detalleIngresoAlmacen->PrecioTotal = $request->PrecioTotal;
        $detalleIngresoAlmacen->PrecioUnitario = $request->PrecioUnitario;
        $detalleIngresoAlmacen->moneda = $request->moneda;
        $detalleIngresoAlmacen->detalle = $request->detalle;

        $detalleIngresoAlmacen->save();
        
        $producto = producto::where('id','=',$request->product_id)->first();
        $stock = $producto->stock + $request->cantidadIngresada;
        producto::where('id', '=', $request->product_id)->update(['stock'=>$stock,]);
        
        
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);

        //return view('detalleIngresoAlmacen.detalleIngresoAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        /*$request->validate([
            'numFactura' => 'numeric|exists:ingresoAlmacen',
        ]);*/
        $numFactura = $request->get('numFactura');

        if ($numFactura != '') {
            $factura = ingresoAlmacen::where('numFactura', '=', $numFactura)->first();
            if ($factura == null) {
                $detalleIngresoAlmacen['detalleIngresoAlmacen'] = null;
                return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen);
            } else {
                $detalleIngresoAlmacen['detalleIngresoAlmacen'] = detalleIngresoAlmacen::where('factura_id', '=', $factura->id)->paginate(10);
                return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen, ['factura' => $factura]);
            }
        } else {
            $detalleIngresoAlmacen['detalleIngresoAlmacen'] = null;
        }

        //return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', ['detalleIngresoAlmacen' => $detalleIngresoAlmacen]);

        return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleIngresoAlmacen = detalleIngresoAlmacen::findOrFail($id);
        return view('detalleIngresoAlmacen.editDetalleIngresoAlmacen', ['detalle' => $detalleIngresoAlmacen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDetalle = request()->except(['_token', '_method']);
        $stockReal = $request->cantidadIngresada;
        $detalleI = detalleIngresoAlmacen::where('id', '=', $id)->first();
        $stockInicial = $detalleI->cantidadIngresada;
        $dif = $stockInicial - $stockReal;

        $producto = producto::where('id','=',$detalleI->product_id)->first();
        if($dif>0){
            $stock = $producto->stock - abs($dif);
        }if($dif<0){
            $stock = $producto->stock + abs($dif);
        }else{
            $stock = $producto->stock;
        }
        producto::where('id', '=', $detalleI->product_id)->update(['stock'=>$stock,]);
        detalleIngresoAlmacen::where('id', '=', $id)->update($datosDetalle);
        return view('detalleIngresoAlmacen.detalleIngresoAlmacen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $detalleI = detalleIngresoAlmacen::where('id', '=', $id)->first();
        $stockInicial = $detalleI->cantidadIngresada;
        $producto = producto::where('id','=',$detalleI->product_id)->first();
        $stock = $producto->stock - $stockInicial;
        producto::where('id', '=', $detalleI->product_id)->update(['stock'=>$stock,]);
        detalleIngresoAlmacen::destroy($id);
        return redirect('detalleIngresoAlmacen');
    }
}
