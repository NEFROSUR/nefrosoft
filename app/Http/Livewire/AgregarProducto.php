<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\producto;
use App\Models\ingresoAlmacen;
use App\Models\detalleIngresoAlmacen;

class AgregarProducto extends Component
{
    public $product_id, $cantidadIngresada, $unidadMedida, $PrecioTotal, $moneda, $detalle, $lote, $fechaVencimiento;
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
            'lote' => 'nullable',
            'fechaVencimiento' => 'nullable',
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
            'lote' => 'nullable',
            'fechaVencimiento' => 'nullable',
        ]);

        $nuevoIngreso = new detalleIngresoAlmacen();
        $nuevoIngreso->factura_id = $this->factura_id;
        $nuevoIngreso->product_id = $this->product_id;
        $nuevoIngreso->cantidadIngresada = $this->cantidadIngresada;
        $nuevoIngreso->unidadMedida = $this->unidadMedida;
        $nuevoIngreso->PrecioTotal = $this->PrecioTotal;
        $nuevoIngreso->PrecioUnitario = $this->PrecioTotal / $this->cantidadIngresada;
        //$nuevoIngreso->PrecioUnitario = number_format($this->PrecioTotal / $this->cantidadIngresada, 4, '.');
        $nuevoIngreso->moneda = $this->moneda;
        $nuevoIngreso->detalle = $this->detalle;
        $nuevoIngreso->lote = $this->lote;
        $nuevoIngreso->fechaVencimiento = $this->fechaVencimiento;

        $nuevoIngreso->save();

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
        $this->lote = '';
        $this->fechaVencimiento = '';
        $this->dispatchBrowserEvent('close-modal');

        

        //$detalleIngresoAlmacen['detalleIngresoAlmacen'] = detalleIngresoAlmacen::where('factura_id', '=', $factura->id)->paginate(20);
        //return view('detalleIngresoAlmacen.mostrarDetalleIngresoAlmacen',$detalleIngresoAlmacen,['factura' => $factura]);
    }
    public function render()
    {
        $productoAll['productoAll'] = producto::orderBy('id', 'asc')->get();
        return view('livewire.agregar-producto', $productoAll);
    }
}
