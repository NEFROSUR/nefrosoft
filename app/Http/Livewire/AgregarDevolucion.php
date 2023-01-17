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
        //RECOPILACION DE DATOS PARA LA DEVOLUCION DE ALGUN PRODUCTO
        $nuevaDevolucion = new devolucionAlmacen();
        $nuevaDevolucion->usuario = $this->usuario;
        $nuevaDevolucion->personalD = $this->personalD;
        $nuevaDevolucion->fechaDevolucion = $this->fechaDevolucion;
        $devolucioneAll = devolucionAlmacen::All();
        //GENERACION DEL CODIGO DE SALIDA PERSONALIZADO Y GUARDADO
        if($devolucioneAll->isEmpty()==true){
            $nuevaDevolucion->numDevolucion = "D" . substr(str_repeat(0, 6) . devolucionAlmacen::All()->count()+1, -5);
        }else{
            $ultimo = devolucionAlmacen::orderBy('id', 'desc')->first();
            $nuevo = $ultimo->id + 1;
            $nuevaDevolucion->numDevolucion = "D" . substr(str_repeat(0, 6) . $nuevo, -5);
        }
        $nuevaDevolucion->detalle = $this->detalle;
        $nuevaDevolucion->save();
        session()->flash('message', 'Se agrego correctamente');
        //LIMPIEZA DE LOS CAMPOS DEL MODAL
        $this->usuario = '';
        $this->personalD = '';
        $this->fechaDevolucion = '';
        $this->detalle = '';
        $this->dispatchBrowserEvent('close-modal');

    }
    //FUNCION QUE INICIALIZA EL LIVEWIRE EN FRONT
    public function render()
    {
        return view('livewire.agregar-devolucion');
    }
    
}
