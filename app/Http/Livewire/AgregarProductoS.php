<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\salidaAlmacen;
use App\Models\detalleSalidaAlmacen;
use App\Models\producto;

class AgregarProductoS extends Component
{

    public $product_id,  $cantidad, $unidadMedida, $destino, $observacion;
    public $salida_id;


    public function update($fields)
    {
        $this->validateOnly($fields, [
            'product_id' => 'required',
            'cantidad' => 'required|numeric',
            'unidadMedida' => 'required',
            'destino' => 'required',
        ]);
    }


    public function guardarProduct()
    {
        $this->validate([
            'product_id' => 'required',
            'cantidad' => 'required|numeric',
            'unidadMedida' => 'required',
            'destino' => 'required',
        ]);
        $producto = producto::where('id', '=', $this->product_id)->first();
        if ($this->cantidad <= $producto->stock) {
            $detalleSalida = new detalleSalidaAlmacen();

            $guia = "S" . substr(str_repeat(0, 6) . detalleSalidaAlmacen::All()->count(), -5);
            $detalleSalida->guiaInterna = $guia;
            $detalleSalida->salida_id = $this->salida_id;
            $detalleSalida->product_id = $this->product_id;
            $detalleSalida->cantidad = $this->cantidad;
            $detalleSalida->precioSalida = $producto->precioProm;
            $detalleSalida->um = $this->unidadMedida;
            $detalleSalida->destino = $this->destino;
            $detalleSalida->observacion = $this->observacion;
            $detalleSalida->save();

            session()->flash('message', 'Se agrego producto');

            //REDUCIR STOCK
            $stock = $producto->stock - $this->cantidad;
            producto::where('id', '=', $this->product_id)->update(['stock' => $stock,]);

            $this->product_id = '';
            $this->cantidad = '';
            $this->unidadMedida = '';
            $this->destino = '';
            $this->observacion = '';

            $this->dispatchBrowserEvent('close-modal');
        }else{
            $this->cantidad = '';
            session()->flash('error', 'Excede el Stock');
        }
    }

    public function render()
    {
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->where('stock', '>', 0)->get();
        return view('livewire.agregar-producto-s', $productoAll);
    }
}
