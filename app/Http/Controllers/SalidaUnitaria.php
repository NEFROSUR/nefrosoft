<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalleSalidaAlmacen;
use App\Models\salidaAlmacen;
use App\Models\producto;

class SalidaUnitaria extends Controller
{

    public function index()
    {
    }

    public function create($id)
    {
        $producto = producto::findOrFail($id);
        return view('salidaUnitaria.crearSalidaUnitaria', ['producto' => $producto]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'cantidad' => 'required',
            'destino' => 'required',
        ]);
        $producto = producto::where('id', '=', $request->product_id)->first();
        if ($request->cantidad <= $producto->stock) {
            $detalleSalida = new detalleSalidaAlmacen();
            $guia = "SU" . substr(str_repeat(0, 6) . detalleSalidaAlmacen::All()->count(), -5);
            $detalleSalida->guiaInterna = $guia;
            $detalleSalida->salida_id = null;
            $detalleSalida->product_id = $request->product_id;
            $detalleSalida->cantidad = $request->cantidad;
            $detalleSalida->um = $request->um;
            $detalleSalida->precioSalida = $producto->precioProm;
            $detalleSalida->destino = $request->destino;
            $detalleSalida->observacion = $request->observacion;
            $detalleSalida->save();
            //REDUCCION DE STOCK
            $stock = $producto->stock - $request->cantidad;
            producto::where('id', '=', $request->product_id)->update(['stock' => $stock,]);

            $total = $this->CALCULARSTOCK();
            $productoAll['productoAll'] = producto::orderBy('id', 'asc')->where('stock', '>', 0)->paginate(10);
            return view('almacen.mostrarAlmacen', $productoAll)->with('total', $total);
        } else {
            $total = $this->CALCULARSTOCK();
            $productoAll['productoAll'] = producto::orderBy('id', 'asc')->where('stock', '>', 0)->paginate(10);
            return view('almacen.mostrarAlmacen', $productoAll)->with('total', $total);
        }
    }

    public function CALCULARSTOCK(){
        //TOTAL DE PRECIO EN EL INVENTARIO
        $productos = producto::where('stock', '>', '0')->get();
        $total = 0;
        foreach ($productos as $indice) {
            $total = $total + ($indice->precioProm * $indice->stock);
        }
        return $total;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view('salidaAlmacen.mostrarSalidaUnitaria');
    }

    public function edit($id)
    {
        return view('salidaAlmacen.editSalidaUnitaria');
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
