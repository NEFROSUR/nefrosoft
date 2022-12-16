<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\producto;
use App\Models\devolucionAlmacen;

class AgregarDevolucion extends Component
{
    public $usuario, $personalD, $fechaDevolucion, $numDevolucion, $detalle;

    public function update($fields)
    {
        $this->validateOnly($fields, [
            'usuario' => 'nullable',
            'personalD' => 'nullable',
            'fechaDevolucion' => 'required',
            'detalle' => 'nullable'
        ]);
    }
    public function guardarDevolucion(){
        $this->validate([
            'usuario' => 'nullable',
            'personalD' => 'nullable',
            'fechaDevolucion' => 'required',
            'detalle' => 'nullable'
        ]);
        $nuevaDevolucion = new devolucionAlmacen();

    }

    public function render()
    {
        return view('livewire.agregar-devolucion');
    }
    
}
