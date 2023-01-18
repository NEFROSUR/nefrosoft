<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\proveedor;

class Datoproveedor extends Component
{
    //ESTA CLASE SOLO ENVIA DATOS DEL PROVEEDOR ESTA EN DESARROLLO
    public $proveedores = null;
    public $provDato = null;
    public $selectProveedor = null;
    //CARGA LOS DATOS DE PROVEEDORES
    public function mount()
    {
        $this->proveedores = proveedor::all();
    }
    public function render()
    {
        return view('livewire.datoproveedor');
    }
    //
    public function updateselectProveedor($proveedor_id)
    {
        $this->provDato = "CLICK";
    }
}
