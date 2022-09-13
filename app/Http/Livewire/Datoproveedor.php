<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\proveedor;

class Datoproveedor extends Component
{

    public $proveedor= null;
    public $selectProveedor= null, $selectProv= null;
    //public $proveedores['proveedores']= proveedor::all()->get();

    public function render()
    {
        return view('livewire.datoproveedor',[
            'proveedores'=>proveedor::all()
        ]);
    }

    public function updateselectProveedor($proveedor_id){
        $this->proveedor= proveedor::where('id',$proveedor_id)->get();
    }
}
