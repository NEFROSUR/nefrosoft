<?php

namespace App\Http\Controllers;

use App\Models\fua;
use Illuminate\Http\Request;

class FuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('recepcion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recepcion.formatoAtencion');
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
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function show(fua $fua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function edit(fua $fua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fua $fua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fua  $fua
     * @return \Illuminate\Http\Response
     */
    public function destroy(fua $fua)
    {
        //
    }
}
