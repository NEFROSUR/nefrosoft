<?php

namespace App\Http\Controllers;

use App\Models\devolucionAlmacen;
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
        $devolucionesAll['devolucionesAll'] = devolucionAlmacen::orderBy('id', 'asc')->paginate(12);
        return view('devoluciones.mostrarDevolucion', $devolucionesAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\devolucionAlmacen  $devolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit(devolucionAlmacen $devolucionAlmacen)
    {
        return view ('devoluciones.editDevolucion');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\devolucionAlmacen  $devolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, devolucionAlmacen $devolucionAlmacen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\devolucionAlmacen  $devolucionAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(devolucionAlmacen $devolucionAlmacen)
    {
        //
    }
    public function refresh()
    {
        $devolucionesAll['devolucionesAll'] = devolucionAlmacen::orderBy('id', 'asc')->paginate(12);
        return view('devoluciones.mostrarDevolucion', $devolucionesAll);
    }
}
