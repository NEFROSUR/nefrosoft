<?php

namespace App\Http\Controllers;

use App\Models\producto;

use Illuminate\Http\Request;
use App\Models\proveedor;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(5);
        return view('producto.crearProducto',$proveedorAll);
        //return view('producto.crearProducto');
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
            'nombreProd' => 'required|unique:productos',
            'codigoProd' => 'required|unique:productos',
            'marcaProd' => 'required',
            'precioUnitarioProd' => 'nullable',
            'unidadMedidaProd' => 'nullable',
            'um' => 'nullable',
            'tipoMoneda' => 'nullable',
        ]);

        $producto = new producto();

        $producto->nombreProd = $request->nombreProd;
        $producto->codigoProd = $request->codigoProd;
        $producto->marcaProd = $request->marcaProd;
        $producto->precioUnitarioProd = $request->precioUnitarioProd;
        $producto->unidadMedidaProd = $request->unidadMedidaProd;
        $producto->um = $request->um;
        $producto->tipoMoneda = $request->tipoMoneda;
        $producto->categoria_id = $request->categoria_id;

        $producto->save();
        //producto::insert($producto);
        //$producto->proveedor;

        //$productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        return view('producto.crearProducto');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        return view('producto.verProducto');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        return view('producto.editProducto');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
