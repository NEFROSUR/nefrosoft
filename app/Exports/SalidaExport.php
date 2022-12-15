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

class SalidaExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'N°',
            'Responsable del registro',
            'Proveedor',
            'Fecha de Emision',
            'Fecha de Ingreso',
            'Fecha de Vencimiento',
            'N° Factura',
            'N° Ingreso',
            'Estado',
            'Total',
            'Observaciones',
        ];
    }
    public function collection()
    {
         //$productos = DB::table('ingreso_almacens')->get();
         $facturas = ingresoAlmacen::select('id','usuario','proveedor_id','fechaEmision',
         'fechaIngreso','fechaVencimiento','numFactura','numIngreso','estadoPaga','total','detalle')->get();
         $c = 1;
         foreach($facturas as $i){
            $i->id = $c;
            $a  = proveedor::where('id','=',$i->proveedor_id)->first();
            $i->proveedor_id = $a->nameProv;
            if($i->estadoPaga = 1){
                $i->estadoPaga = "Pagado";
            }else{
                $i->estadoPaga = "No Pagado";
            }
            $c = $c +1;
         }
         return $facturas;

    }
}