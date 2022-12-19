<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proveedores.proveedores');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.crearProveedor');
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
            'nameProv' => 'required|unique:proveedors',
            'rucProv' => 'required|unique:proveedors',
            'direccionProv' => 'nullable',
            'correoProv' => 'nullable|string',
            'telefonoProv' => 'nullable|numeric|min:9',
            'categoriaProv' => 'nullable',
            'detalleProv' => 'nullable|string',
        ]);

        $searchString = " ";
        $replaceString = "";

        $proveedor = new proveedor();
        $proveedor->nameProv = $request->nameProv;
        $rucProv = str_replace($searchString, $replaceString, $request->rucProv);
        $proveedor->rucProv = $rucProv;
        
        $proveedor->direccionProv = $request->direccionProv;

        $correoProv = str_replace($searchString, $replaceString, $request->correoProv);
        $proveedor->correoProv = $correoProv;

        $proveedor->telefonoProv = $request->telefonoProv;

        $proveedor->categoriaProv = $request->categoriaProv;
        $proveedor->detalleProv = $request->detalleProv;

        $proveedor->save();
        $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(5);
        return view('proveedores.verProveedor',$proveedorAll);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $nameProv = $request->get('nameProv');
        $rucProv = $request->get('rucProv');
        if ($nameProv == '' && $rucProv == '') {
            $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(10);
        } else {
            if ($rucProv == '') {
                $proveedorAll['proveedorAll'] = proveedor::where('nameProv', '=', $nameProv)->paginate(10);
            }
            if ($nameProv == '') {
                $proveedorAll['proveedorAll'] = proveedor::where('rucProv', '=', $rucProv)->paginate(10);
            }
        }
        return view('proveedores.verProveedor', $proveedorAll);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = proveedor::findOrFail($id);
        return view('proveedores.editProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProveedor = request()->except(['_token', '_method']);
        proveedor::where('id', '=', $id)->update($datosProveedor);
        $proveedor = proveedor::findOrFail($id);
        $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(10);
        return view('proveedores.verProveedor',$proveedorAll);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        proveedor::destroy($id);
        $proveedorAll['proveedorAll'] = proveedor::orderBy('id', 'asc')->paginate(10);
        return view('proveedores.verProveedor', $proveedorAll);
    }
}
