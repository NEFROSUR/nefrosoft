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
        $nuevaDevolucion->usuario = $this->usuario;
        $nuevaDevolucion->personalD = $this->personalD;
        $nuevaDevolucion->fechaDevolucion = $this->fechaDevolucion;
        $nuevaDevolucion->numDevolucion = "D" . substr(str_repeat(0, 6) . devolucionAlmacen::All()->count(), -5);;
        $nuevaDevolucion->detalle = $this->detalle;
        $nuevaDevolucion->save();
        session()->flash('message', 'Se agrego correctamente');
        $this->usuario = '';
        $this->personalD = '';
        $this->fechaDevolucion = '';
        $this->detalle = '';
        $this->dispatchBrowserEvent('close-modal');

    }

    public function render()
    {
        
        return view('livewire.agregar-devolucion');
    }
    
}
