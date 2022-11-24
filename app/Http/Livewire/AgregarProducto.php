<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\producto;
use App\Models\ingresoAlmacen;
use App\Models\detalleIngresoAlmacen;

class AgregarProducto extends Component
{
    public $product_id, $cantidadIngresada, $unidadMedida, $PrecioTotal, $moneda, $detalle;
    public $factura_id;

    public function update($fields)
    {
        $this->validateOnly($fields, [
            'product_id' => 'required',
            'cantidadIngresada' => 'required|numeric',
            'unidadMedida' => 'required',
            'PrecioTotal' => 'required',
            'moneda' => 'required',
            'detalle' => 'nullable',
        ]);
    }


    public function guardarProduct()
    {
        $this->validate([
            'product_id' => 'required',
            'cantidadIngresada' => 'required|numeric',
            'unidadMedida' => 'required',
            'PrecioTotal' => 'required',
            'moneda' => 'required',
            'detalle' => 'nullable',
        ]);

        $detalleIngresoAlmacen = new detalleIngresoAlmacen();
        $detalleIngresoAlmacen->factura_id = $this->factura_id;
        $detalleIngresoAlmacen->product_id = $this->product_id;
        $detalleIngresoAlmacen->cantidadIngresada = $this->cantidadIngresada;
        $detalleIngresoAlmacen->unidadMedida = $this->unidadMedida;
        $detalleIngresoAlmacen->PrecioTotal = $this->PrecioTotal;
        $detalleIngresoAlmacen->PrecioUnitario = $this->PrecioTotal / $this->cantidadIngresada;
        $detalleIngresoAlmacen->moneda = $this->moneda;
        $detalleIngresoAlmacen->detalle = $this->detalle;

        $detalleIngresoAlmacen->save();

        session()->flash('message', 'Se agrego correctamente');

        $producto = producto::where('id', '=', $this->product_id)->first();
        $stock = $producto->stock + $this->cantidadIngresada;
        producto::where('id', '=', $this->product_id)->update(['stock' => $stock,]);

        $precioProm = detalleIngresoAlmacen::where('product_id', '=', $this->product_id)->avg('PrecioUnitario');
        producto::where('id', '=', $this->product_id)->update(['precioProm' => $precioProm,]);

        $factura = ingresoAlmacen::where('id', '=', $this->factura_id)->first();
        $prodtotal = detalleIngresoAlmacen::where('factura_id', '=', $this->factura_id)->sum('PrecioTotal');
        
        ingresoAlmacen::where('id', '=', $this->factura_id)->update(['total'=>$prodtotal]);



        $this->product_id = '';
        $this->cantidadIngresada = '';
        $this->unidadMedida = '';
        $this->PrecioTotal = '';
        $this->moneda = '';
        $this->detalle = '';
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->get();
        return view('livewire.agregar-producto', $productoAll);
    }
}
