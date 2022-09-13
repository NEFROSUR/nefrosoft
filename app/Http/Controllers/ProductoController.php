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
        return view('producto.productos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.crearProducto');
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
            'nombreProd' => 'required',
            'codigoProd' => 'required|unique:productos',
            'marcaProd' => 'required',
            'um' => 'nullable',
        ]);

        $producto = new producto();

        $producto->nombreProd = $request->nombreProd;
        $producto->codigoProd = $request->codigoProd;
        $producto->marcaProd = $request->marcaProd;
        $producto->um = $request->um;
        $producto->categoria_id = $request->categoria_id;

        $producto->save();

        return view('producto.crearProducto');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $nombreProd = $request->get('nombreProd');
        $codigoProd = $request->get('codigoProd');
        $categoria_id = $request->get('categoria_id');
        if ($nombreProd == '' && $codigoProd == '' && $categoria_id == '') {
            $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(5);
        } else {
            if ($codigoProd == '' && $categoria_id == '') {
                $productoAll['productoAll'] = producto::where('nombreProd', '=', $nombreProd)->paginate(5);
            }
            if ($codigoProd == '' && $categoria_id == '') {
                $productoAll['productoAll'] = producto::where('codigoProd', '=', $codigoProd)->paginate(5);
            }
            if ($nombreProd == '' && $codigoProd == '') {
                $productoAll['productoAll'] = producto::where('categoria_id', '=', $categoria_id)->paginate(5);
            };
        }
        return view('producto.verProducto', $productoAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = producto::findOrFail($id);

        return view('producto.editProducto', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except(['_token', '_method']);
        producto::where('id', '=', $id)->update($datosProducto);
        $producto = producto::findOrFail($id);
        return view('producto.productos', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        producto::destroy($id);
        return redirect('producto');
    }
}
