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
        $categorias = [
            "1" => "INSTRUMENTO",
            "2" => "MATERIAL DE LIMPIEZA",
            "3" => "MEDICAMENTO",
            "4" => "SERVICIO",
            "5" => "UTILES DE ESCRITORIO",
            "6" => "OTROS",
            "7" => "SIN CATEGORIA",

        ];
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
            'nombreProd' => 'required',
            'marcaProd' => 'nullable',
            'um' => 'nullable',
        ]);

        $producto = new producto();

        $cparte1 = $request->nombreProd;
        $cparte1 = substr( $cparte1, 0, 2);
        $cparte2 = $request->um;
        $cparte2 = substr( $cparte2, 0, 2);
        $cparte3 = $request->categoria_id;
        $codigo = $cparte1.$cparte2.$cparte3;
        

        $producto->nombreProd = $request->nombreProd;
        $producto->codigoProd = strtoupper($codigo);
        $producto->marcaProd = $request->marcaProd;
        $producto->umedida = $request->umedida;
        $producto->um = $unidades[$request->umedida];
        $producto->categoria_id = $request->categoria_id;
        $producto->categoria = $categorias[$request->categoria_id];
        $producto->stock = 0;
        $producto->precioProm = 0;
        $producto->save();

        /*
        $inventario = new inventario();
        $inventario->producto_id = $codigo;
        $inventario->stock = 0;
        $inventario->save();
        */

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
            $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(10);
        } else {
            if ($codigoProd == '' && $categoria_id == '') {
                $productoAll['productoAll'] = producto::where('nombreProd', '=', $nombreProd)->paginate(10);
            }
            if ($nombreProd == '' && $categoria_id == '') {
                $productoAll['productoAll'] = producto::where('codigoProd', '=', $codigoProd)->paginate(10);
            }
            if ($nombreProd == '' && $codigoProd == '') {
                $productoAll['productoAll'] = producto::where('categoria_id', '=', $categoria_id)->paginate(10);
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

        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(10);
        return view('producto.verProducto', $productoAll);
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
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(10);
        return view('producto.verProducto', $productoAll);
    }
    public function refresh()
    {
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->paginate(10);
        return view('producto.verProducto', $productoAll);
    }
}
