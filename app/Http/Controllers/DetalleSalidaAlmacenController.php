<?php

namespace App\Http\Controllers;

use App\Models\detalleSalidaAlmacen;
use Illuminate\Http\Request;
use App\Models\salidaAlmacen;
use App\Models\producto;

class DetalleSalidaAlmacenController extends Controller
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

    public function createSalida($id)
    {
        $salida_id = salidaAlmacen::findOrFail($id);

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->where('stock', '>', 0)->paginate(5);
        //$validator = $request->get('cantidadIngresada'); 
        return view('detalleSalidaAlmacen.crearDetalleSalidaAlmacen', $productoAll, ['salida_id' => $salida_id]);
    }
    public function create()
    {

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        return view('detalleSalidaAlmacen.crearDetalleSalidaAlmacen', $productoAll);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidades = [
            "Unidad" => "und.",
            "Bolsa" => "bol.",
            "Caja" => "caj.",
            "Galon" => "gal.",
            "Metros" => "m.",
            "Paquete" => "paq.",
            "Pares" => "par.",
            "Resma" => "resma",

        ];
        $request->validate([
            'product_id' => 'required',
            'cantidad' => 'required',
            'destino' => 'required',
            'unidadMedida' => 'required',
        ]);
        $detalleSalida = new detalleSalidaAlmacen();

        $guia = "S" . substr(str_repeat(0, 6) . detalleSalidaAlmacen::All()->count(), -5);
        $detalleSalida->guiaInterna = $guia;
        $detalleSalida->salida_id = $request->salida_id;
        $detalleSalida->product_id = $request->product_id;
        $detalleSalida->cantidad = $request->cantidad;
        $detalleSalida->precioSalida = 0;
        $detalleSalida->um = $request->unidadMedida;
        $detalleSalida->destino = $request->destino;
        $detalleSalida->observacion = $request->observacion;
        $detalleSalida->save();
        
        //REDUCIR STOCK
        $producto = producto::where('id', '=', $request->product_id)->first();
        $stock = $producto->stock - $request->cantidad;
        producto::where('id', '=', $request->product_id)->update(['stock' => $stock,]);

        /*
        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'desc')->paginate(10);
        return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);
        */
        return view('detalleSalidaAlmacen.mostrarDetalleSalidaAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $numSalida = $request->get('numSalida');
        if ($numSalida != '') {
            $salida = salidaAlmacen::where('numSalida', '=', $numSalida)->first();
            if ($salida == null) {
                $detalleSalidaAlmacen['detalleSalidaAlmacen'] = null;
                return view('detalleSalidaAlmacen.mostrarDetalleSalidaAlmacen', $detalleSalidaAlmacen);
            } else {
                $detalleSalidaAlmacen['detalleSalidaAlmacen'] = detalleSalidaAlmacen::where('salida_id', '=', $salida->id)->paginate(10);
                return view('detalleSalidaAlmacen.mostrarDetalleSalidaAlmacen', $detalleSalidaAlmacen, ['salida' => $salida]);
            }
        } else {
            $detalleSalidaAlmacen['detalleSalidaAlmacen'] = null;
        }
        
        return view('detalleSalidaAlmacen.mostrarDetalleSalidaAlmacen',$detalleSalidaAlmacen);
    }
    public function showN($id)
    {
        $salida = salidaAlmacen::where('id', '=', $id)->first();
        $detalleSalidaAlmacen['detalleSalidaAlmacen'] = detalleSalidaAlmacen::where('salida_id', '=', $salida->id)->paginate(10);
        return view('detalleSalidaAlmacen.mostrarDetalleSalidaAlmacen',$detalleSalidaAlmacen,['salida' => $salida]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleSalidaAlmacen = detalleSalidaAlmacen::findOrFail($id);
        return view('detalleSalidaAlmacen.editDetalleSalidaAlmacen', ['detalle' => $detalleSalidaAlmacen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDetalle = request()->except(['_token', '_method']);
        $stockReal = $request->cantidad;
        $detalleS = detalleSalidaAlmacen::where('id', '=', $id)->first();
        $stockInicial = $detalleS->cantidad;
        $dif = $stockInicial - $stockReal;

        $producto = producto::where('id','=',$detalleS->product_id)->first();
        if($dif>0){
            $dif * -1;
            $stock = $producto->stock + $dif;
            producto::where('id', '=', $detalleS->product_id)->update(['stock'=>$stock,]);
        }if($dif<0){
            $stock = $producto->stock - abs($dif);
            producto::where('id', '=', $detalleS->product_id)->update(['stock'=>$stock,]);
        }
        detalleSalidaAlmacen::where('id', '=', $id)->update($datosDetalle);

        $detalleSalidaAlmacen['detalleSalidaAlmacen'] = null;
        return view('detalleSalidaAlmacen.mostrarDetalleSalidaAlmacen', $detalleSalidaAlmacen);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detalleSalidaAlmacen  $detalleSalidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleS = detalleSalidaAlmacen::where('id', '=', $id)->first();
        $cantidadSalida = $detalleS->cantidad;
        $producto = producto::where('id','=',$detalleS->product_id)->first();
        $stock = $producto->stock + $cantidadSalida;
        producto::where('id', '=', $detalleS->product_id)->update(['stock'=>$stock,]);
        detalleSalidaAlmacen::destroy($id);
        return redirect('detalleSalidaAlmacen');
    }
}
