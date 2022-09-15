<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\proveedor;

class Datoproveedor extends Component
{

    public $proveedores = null;
    public $provDato = null;
    public $selectProveedor = null;

    public function mount()
    {
        $this->proveedores = proveedor::all();
    }
    public function render()
    {
        /*return view('livewire.datoproveedor', [
            'proveedores' => proveedor::all()
        ]);*/
        return view('livewire.datoproveedor');
    }

    public function updateselectProveedor($proveedor_id)
    {
        $this->provDato = "CLICK";
        //$this->provDato = proveedor::where('id', $proveedor_id)->get();
    }
}
