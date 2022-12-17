<?php

namespace App\Http\Controllers;

use App\Models\devolucionAlmacen;
use App\Models\producto;
use App\Models\detalleDevolucionAlmacen;
use Illuminate\Http\Request;

class DevolucionAlmacenController extends Controller
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
    public function create()
    {
        return view('devoluciones.crearDevolucion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\devolucionAlmacen  $devolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $numDevolucion = $request->get('numDevolucion');
        if ($numDevolucion != '') {
            $devolucionesAll['devolucionesAll'] = devolucionAlmacen::where('numDevolucion', '=', $numDevolucion)->first();
        } else {
            $devolucionesAll['devolucionesAll'] = devolucionAlmacen::orderBy('id', 'desc')->paginate(12);
        }
        return view('devoluciones.mostrarDevolucion', $devolucionesAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\devolucionAlmacen  $devolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $devolucion = devolucionAlmacen::findOrFail($id);
        return view('devoluciones.editDevolucion', ['devolucion' => $devolucion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\devolucionAlmacen  $devolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDevolucion = request()->except(['_token', '_method']);
        devolucionAlmacen::where('id', '=', $id)->update($datosDevolucion);
        $devolucionesAll['devolucionesAll'] = devolucionAlmacen::orderBy('id', 'desc')->paginate(12);
        return view('devoluciones.mostrarDevolucion', $devolucionesAll);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\devolucionAlmacen  $devolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devolucion = detalleDevolucionAlmacen::where('devolucion_id', '=', $id)->get();
        if (count($devolucion) == 0) {
            devolucionAlmacen::destroy($id);
        } else {
            foreach ($devolucion as $i) {
                $producto = producto::where('id', '=', $i->product_id)->first();
                $stock = $producto->stock - $i->cantidadDevuelta;
                producto::where('id', '=', $i->product_id)->update(['stock' => $stock]);

                detalleDevolucionAlmacen::destroy($i->id);
            }
            devolucionAlmacen::destroy($id);
        }
        $devolucionesAll['devolucionesAll'] = devolucionAlmacen::orderBy('id', 'desc')->paginate(12);
        return view('devoluciones.mostrarDevolucion', $devolucionesAll);
    }
    public function refresh()
    {
        $devolucionesAll['devolucionesAll'] = devolucionAlmacen::orderBy('id', 'desc')->paginate(12);
        return view('devoluciones.mostrarDevolucion', $devolucionesAll);
    }
}
