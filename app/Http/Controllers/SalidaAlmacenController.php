<?php

namespace App\Http\Controllers;

use App\Models\salidaAlmacen;
use App\Models\producto;
use App\Models\detalleSalidaAlmacen;
use Illuminate\Http\Request;
//CLASE PARA LA SALIDA DE ALMACEN
class SalidaAlmacenController extends Controller
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
        $producto = producto::findOrFail($id);

        return view('salidaAlmacen.crearSalidaAlmacen', ['producto' => $producto]);
    }
    public function create()
    {
        return view('salidaAlmacen.crearSalidaAlmacen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //GUARDA LA CABECERA DE LA SALIDA
    public function store(Request $request)
    {
        $request->validate([
            'reponsableA' => 'required',
            'responsable' => 'required',
            'fechaSalida' => 'required',
            'turno' => 'required',
            'areaRecepcion' => 'required',
            'recepcionista' => 'required',
            'areaDestino' => 'required',
            'detalle' => 'nullable'
        ]);

        $salidaAlmacen = new salidaAlmacen();
        $salidaAlmacen->reponsableA = $request->reponsableA;
        $salidaAlmacen->responsable = $request->responsable;
        $salidaAlmacen->fechaSalida = $request->fechaSalida;
        //GENERA CODIGO INTERNO PERSONALIZADO DE SALIDA
        $ingresosAll = salidaAlmacen::All();
        if ($ingresosAll->isEmpty() == true) {
            $salidaAlmacen->numSalida = "S" . substr(str_repeat(0, 6) . salidaAlmacen::All()->count() + 1, -5);
        } else {
            $ultimo = salidaAlmacen::orderBy('id', 'desc')->first();
            $nuevo = $ultimo->id + 1;
            $salidaAlmacen->numSalida = "S" . substr(str_repeat(0, 6) . $nuevo, -5);
        }
        $salidaAlmacen->areaRecepcion = $request->areaRecepcion;
        $salidaAlmacen->recepcionista = $request->recepcionista;
        $salidaAlmacen->areaDestino = $request->areaDestino;
        $salidaAlmacen->turno = $request->turno;
        $salidaAlmacen->detalle = $request->detalle;
        $salidaAlmacen->save();


        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'desc')->paginate(12);
        return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    //MUESTRA LA LISTA DE SALIDAS
    public function show(Request $request)
    {
        $numSalida = $request->get('numSalida');
        if ($numSalida != '') {
            $salidasAll['salidasAll'] = salidaAlmacen::where('numSalida', '=', $numSalida)->paginate(12);
            return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);
        } else {
            $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'desc')->paginate(12);
        }
        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'desc')->paginate(12);

        return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salidaAlmacen = salidaAlmacen::findOrFail($id);
        return view('salidaAlmacen.editSalidaAlmacen', ['salidaAlmacen' => $salidaAlmacen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    //EDITA DATOS DE LA CABECERA DE SALIDA
    public function update(Request $request, $id)
    {
        $datosSalida = request()->except(['_token', '_method']);
        salidaAlmacen::where('id', '=', $id)->update($datosSalida);
        $salidaAlmacen = salidaAlmacen::findOrFail($id);
        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'desc')->paginate(12);
        return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salidaAlmacen  $salidaAlmacen
     * @return \Illuminate\Http\Response
     */
    //ELIMINA LA SALIDA (CUIDADO) ELIMINACION EN CADENA Y ACTUALIZACION DEL STOCK POR CADA PRODUCTO
    public function destroy($id)
    {
        $salida = detalleSalidaAlmacen::where('salida_id', '=', $id)->get();
        if (count($salida) == 0) {
            salidaAlmacen::destroy($id);
        } else {
            foreach ($salida as $i) {
                $cantidadSalida = $i->cantidad;
                $producto = producto::where('id', '=', $i->product_id)->first();
                $stock = $producto->stock + $cantidadSalida;
                producto::where('id', '=', $i->product_id)->update(['stock' => $stock]);
                detalleSalidaAlmacen::destroy($i->id);
            }
            salidaAlmacen::destroy($id);
        }
        $salidasAll['salidasAll'] = salidaAlmacen::orderBy('id', 'desc')->paginate(12);
        return view('salidaAlmacen.mostrarSalidaAlmacen', $salidasAll);
    }
}
