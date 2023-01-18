<?php

namespace App\Exports;

use App\Models\inventario;
use App\Models\detalleIngresoAlmacen;
use App\Models\detalleSalidaAlmacen;
use App\Models\producto;
use App\Models\proveedor;
use App\Models\ingresoAlmacen;
use App\Models\salidaAlmacen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
//EXPORT DE EXCEL (VIENE DEL CONTROLADOR DE EXCEL DE LA CARPETA  HTTP/CONTROLLERS)
class FacturaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'N°',
            'Numero de Factura',
            'Nombre del Producto',
            'Cantidad Ingresada',
            'Unidad de Medida',
            'Precio Unitario del Producto',
            'Precio Total del item',
            'Moneda',
            'Observaciones',
            'Proveedor',
            'Fecha de Emision',
            'Fecha de Ingreso',
            'Fecha de Vencimiento'
        ];
    }
    public function collection()
    {
        $facturas = detalleIngresoAlmacen::select(
            'id',
            'factura_id',
            'product_id',
            'cantidadIngresada',
            'unidadMedida',
            'PrecioUnitario',
            'PrecioTotal',
            'moneda',
            'detalle'
        )->get();
        $c = 1;
        foreach($facturas as $i){
            $i->id = $c;
            $factura = ingresoAlmacen::where('id','=',$i->factura_id)->first();
            $i->factura_id = $factura->numFactura;
            $producto = producto::where('id','=',$i->product_id)->first();
            $i->product_id = $producto->nombreProd;
            if($i->unidadMedida = 1){
                $i->unidadMedida = "Unidades";
            }else{
                $i->unidadMedida = "Otro";
            }
            if($i->moneda = 1){
                $i->moneda = "Soles";
            }else{
                $i->moneda = "Dolares";
            }
            $proveedorN = proveedor::where('id','=',$factura->proveedor_id)->first();
            $i->proveedor = $proveedorN->nameProv;
            $i->fechaE = $factura->fechaEmision;
            $i->fechaI = $factura->fechaIngreso;
            $i->fechaV = $factura->fechaVencimiento;
            $c = $c +1;
        }
        return $facturas;
    }
}
