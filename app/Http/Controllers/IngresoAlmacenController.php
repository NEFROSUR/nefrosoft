<?php

namespace App\Http\Controllers;

use App\Models\ingresoAlmacen;
use Illuminate\Http\Request;

class IngresoAlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('almacen.ingresoAlmacen.ingresoAlmacen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.ingresoAlmacen.crearIngresoAlmacen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('almacen.ingresoAlmacen.crearIngresoAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(ingresoAlmacen $ingresoAlmacen)
    {
        return view('almacen.ingresoAlmacen.mostrarIngresoAlmacen');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit(ingresoAlmacen $ingresoAlmacen)
    {
        return view('almacen.ingresoAlmacen.editIngresoAlmacen.blade');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingresoAlmacen $ingresoAlmacen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingresoAlmacen $ingresoAlmacen)
    {
        //
    }
}
