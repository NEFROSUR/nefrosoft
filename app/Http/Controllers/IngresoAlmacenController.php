<?php

namespace App\Http\Controllers;

use App\Models\ingresoAlmacen;
use Illuminate\Http\Request;
use App\Models\proveedor;
use App\Models\producto;

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
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(5);
        return view('ingresoAlmacen.crearIngresoAlmacen',$proveedorAll,$productoAll);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('ingresoAlmacen.crearIngresoAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function show(ingresoAlmacen $ingresoAlmacen)
    {
        return view('ingresoAlmacen.mostrarIngresoAlmacen');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresoAlmacen = ingresoAlmacen::findOrFail($id);
        return view('ingresoAlmacen.editIngresoAlmacen', ['ingresoAlmacen' => $ingresoAlmacen]);
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
        return view('ingresoAlmacen.ingresoAlmacen', compact('ingresoAlmacen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ingresoAlmacen  $ingresoAlmacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ingresoAlmacen::destroy($id);
        return redirect('ingresoAlmacen');
    }
}
