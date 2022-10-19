<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use App\Models\detalleIngresoAlmacen;
use App\Models\detalleSalidaAlmacen;
use App\Models\producto;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('almacen.indexAlmacen');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productoAll['productoAll'] = producto::All();
        return view('almacen.crearAlmacen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('almacen.crearAlmacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $codigoProd = $request->get('codigoProd');
        $categoria_id = $request->get('categoria_id');
        if ($codigoProd == '' && $categoria_id == '') {
            $productoAll['productoAll'] = producto::orderBy('id', 'asc')->where('stock', '>', 0)->paginate(5);
        } else {
            if ($categoria_id == '') {
                $productoAll['productoAll'] = producto::where('codigoProd', '=', $codigoProd)->paginate(5);
            }
            if ($codigoProd == '') {
                $productoAll['productoAll'] = producto::where('categoria_id', '=', $categoria_id)->paginate(5);
            }
        }

        $listIdProduct['listIdProduct'] = detalleIngresoAlmacen::groupBy('product_id')->get();
        /*foreach ($listIdProduct as $posi){
            $promedioUnitario['promedioUnitario'] = detalleIngresoAlmacen::where('product_id', '=', $posi)->avg();    
        }*/


        return view('almacen.mostrarAlmacen', $productoAll, $listIdProduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(inventario $inventario)
    {
        return view('almacen.editAlmacen');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventario $inventario)
    {
        //
    }
}
