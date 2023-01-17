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
    //PETICION DE LOS DATOS DE INGRESO ALMACEN
    public function createMedica($id)
    {
        $factura = ingresoAlmacen::findOrFail($id);

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->get();
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
    //METODO QUE GUARDA EL DETALLE DE CADA INGRESO
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'cantidadIngresada' => 'required',
            'unidadMedida' => 'required',
            'PrecioTotal' => 'required',
            'moneda' => 'required',
            'detalle' => 'nullable'
        ]);

        $detalleIngresoAlmacen = new detalleIngresoAlmacen();
        $detalleIngresoAlmacen->factura_id = $request->factura_id;
        $detalleIngresoAlmacen->product_id = $request->product_id;
        $detalleIngresoAlmacen->cantidadIngresada = $request->cantidadIngresada;
        $detalleIngresoAlmacen->unidadMedida = $request->unidadMedida;
        $detalleIngresoAlmacen->PrecioTotal = $request->PrecioTotal;
        $detalleIngresoAlmacen->PrecioUnitario = $request->PrecioTotal / $request->cantidadIngresada;
        $detalleIngresoAlmacen->moneda = $request->moneda;
        $detalleIngresoAlmacen->detalle = $request->detalle;

        $detalleIngresoAlmacen->save();
        //ACTUALIZACION DEL STOCK EN INVENTARIO
        $producto = producto::where('id', '=', $request->product_id)->first();
        $stock = $producto->stock + $request->cantidadIngresada;
        producto::where('id', '=', $request->product_id)->update(['stock' => $stock,]);

        $precioProm = detalleIngresoAlmacen::where('product_id', '=', $request->product_id)->avg('PrecioUnitario');
        producto::where('id', '=', $request->product_id)->update(['precioProm' => $precioProm,]);

        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    //MOSTRAR EL DETALLE DE CADA FACTURA EN BUSQUEDA POR FACTURA
    public function show(Request $request)
    {
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
        return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen);
    }
    public function showN($id)
    {
        $factura = ingresoAlmacen::where('id', '=', $id)->first();
        $detalleIngresoAlmacen['detalleIngresoAlmacen'] = detalleIngresoAlmacen::where('factura_id', '=', $factura->id)->paginate(10);
        return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen, ['factura' => $factura]);
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
    //ACTUALIZACION DE LOS DATOS DEL DETALLE DE LA FACTURA
    public function update(Request $request, $id)
    {
        //VERIFICACION DE COMO AFECTA AL STOCK Y ACTUALIZACION EN BASE A ESO
        $datosDetalle = request()->except(['_token', '_method']);
        $stockReal = $request->cantidadIngresada;
        $detalleI = detalleIngresoAlmacen::where('id', '=', $id)->first();
        $stockInicial = $detalleI->cantidadIngresada;
        $dif = $stockInicial - $stockReal;

        $producto = producto::where('id', '=', $detalleI->product_id)->first();
        if ($dif > 0) {
            $dif * -1;
            $stock = $producto->stock - $dif;
            producto::where('id', '=', $detalleI->product_id)->update(['stock' => $stock,]);
        }
        if ($dif < 0) {
            $stock = $producto->stock + abs($dif);
            producto::where('id', '=', $detalleI->product_id)->update(['stock' => $stock,]);
        }
        //Actualizacion del costo de la factura
        $factura = ingresoAlmacen::where('id', '=', $detalleI->factura_id)->first();
        $prodtotal = $factura->total - $detalleI->PrecioTotal;
        $prodtotal = $prodtotal + $request->PrecioTotal;
        ingresoAlmacen::where('id', '=', $factura->id)->update(['total' => $prodtotal]);
        //Actualizacion del precio Unitario de la Factura
        $PrecioUnitario = $request->PrecioTotal / $stockReal;
        detalleIngresoAlmacen::where('id', '=', $id)->update($datosDetalle);
        detalleIngresoAlmacen::where('id', '=', $id)->update(['PrecioUnitario' => $PrecioUnitario]);
        //Actualizacion en la tabla Productos de Precio Promedio
        $precioProm = detalleIngresoAlmacen::where('product_id', '=', $request->product_id)->avg('PrecioUnitario');
        producto::where('id', '=', $request->product_id)->update(['precioProm' => $precioProm,]);


        $factura = ingresoAlmacen::where('id', '=', $detalleI->factura_id)->first();
        $detalleIngresoAlmacen['detalleIngresoAlmacen'] = detalleIngresoAlmacen::where('factura_id', '=', $factura->id)->paginate(10);
        return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen, ['factura' => $factura]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalleIngresoAlmacen  $detalleIngresoAlmacen
     * @return \Illuminate\Http\Response
     */
    //DESTRUCCION DEL REGISTRO DEL DETALLE DE FACTURA Y ACTUALIZACION EN STOCK
    public function destroy($id)
    {
        $detalleI = detalleIngresoAlmacen::where('id', '=', $id)->first();
        $stockInicial = $detalleI->cantidadIngresada;
        $producto = producto::where('id', '=', $detalleI->product_id)->first();
        $stock = $producto->stock - $stockInicial;
        producto::where('id', '=', $detalleI->product_id)->update(['stock' => $stock,]);

        $factura = ingresoAlmacen::where('id', '=', $detalleI->factura_id)->first();
        $prodtotal = $factura->total - $detalleI->PrecioTotal;
        ingresoAlmacen::where('id', '=', $factura->id)->update(['total' => $prodtotal]);

        detalleIngresoAlmacen::destroy($id);

        $detalleIngresoAlmacen['detalleIngresoAlmacen'] = detalleIngresoAlmacen::where('factura_id', '=', $factura->id)->paginate(10);
        return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen, ['factura' => $factura]);
    }

    //METODO PARA REFRESCAR LOS REGISTROS
    public function refresh($id)
    {
        $factura = ingresoAlmacen::where('id', '=', $id)->first();
        $detalleIngresoAlmacen['detalleIngresoAlmacen'] = detalleIngresoAlmacen::where('factura_id', '=', $factura->id)->paginate(10);
        return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen', $detalleIngresoAlmacen, ['factura' => $factura]);
    }
    //METODO PARA VOLVER A LA LISTA DE FACTURAS
    public function back()
    {
        $entradasAll['entradasAll'] = ingresoAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('ingresoAlmacen.mostrarIngresoAlmacen', $entradasAll);
    }
}
