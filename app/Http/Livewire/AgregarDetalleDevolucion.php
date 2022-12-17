<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\producto;
use App\Models\detalleDevolucionAlmacen;
use App\Models\devolucionAlmacen;

class AgregarDetalleDevolucion extends Component
{
    public $product_id,  $cantidadDevuelta, $unidadMedida, $detalle;
    public $devolucion_id;

    public function update($fields)
    {
        $this->validateOnly($fields, [
            'product_id' => 'required',
            'cantidadDevuelta' => 'required|numeric',
            'unidadMedida' => 'required',
            'detalle' => 'nullable',
        ]);
    }


    public function guardarDevo(){
        $this->validate([
            'product_id' => 'required',
            'cantidadDevuelta' => 'required|numeric',
            'unidadMedida' => 'required',
            'detalle' => 'nullable',
        ]);
        $producto = producto::where('id','=',$this->product_id)->first();
        $detalleDevolucion = new detalleDevolucionAlmacen();
        $detalleDevolucion->devolucion_id = $this->devolucion_id;
        $detalleDevolucion->product_id = $this->product_id;
        $detalleDevolucion->cantidadDevuelta = $this->cantidadDevuelta;
        $detalleDevolucion->unidadMedida = $this->unidadMedida;
        $detalleDevolucion->precioDevolucion = $producto->precioProm;
        $detalleDevolucion->detalle = $this->detalle;
        $detalleDevolucion->save();
        session()->flash('message', 'Se agrego correctamente');


        //ACTUALIZACION DE STOCK
        $stock = $producto->stock + $this->cantidadDevuelta;
        producto::where('id', '=', $this->product_id)->update(['stock' => $stock,]);
        //precioPromedio (PREGUNTAR)
        //$precioProm = detalleDevolucionAlmacen::where('product_id', '=', $this->product_id)->avg('PrecioUnitario');
        //producto::where('id', '=', $this->product_id)->update(['precioProm' => $precioProm,]);
        


        $detalleDevolucion->devolucion_id = '';
        $detalleDevolucion->product_id = '';
        $detalleDevolucion->cantidadDevuelta = '';
        $detalleDevolucion->unidadMedida = '';
        $detalleDevolucion->precioDevolucion = '';
        $detalleDevolucion->detalle = '';
        $this->dispatchBrowserEvent('close-modal');

    }

    public function render()
    {
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->get();
        return view('livewire.agregar-detalle-devolucion',$productoAll);
    }
}
