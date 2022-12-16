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
use Carbon\Carbon;

class SalidaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'N°',
            'Fecha',
            'Guia Interna de Salida',
            'Salida',
            'Producto',
            'Cantidad',
            'Unidad de Medida',
            'Precio de Salida',
            'Destino de Salida',
            'Observacion',
            'Area del Responsable',
            'Responsable de la Entrega',
            'Personal que Recepciono',
            'Area destinada',
            'Turno',
        ];
    }
    public function collection()
    {
        $salidas = detalleSalidaAlmacen::select(
            'id',
            'created_at',
            'guiaInterna',
            'salida_id',
            'product_id',
            'cantidad',
            'um',
            'precioSalida',
            'destino',
            'observacion'
        )->get();
        $c = 1;
        foreach ($salidas as $i) {
            $i->created_at = date('d-m-Y', strtotime($i->created_at));
            //CONTADOR
            $i->id = $c;
            //CAMBIAR EL ID POR EL NOMBRE DEL PRODUCTO
            $a  = producto::where('id', '=', $i->product_id)->first();
            $i->product_id = $a->nombreProd;
            //CAMBIA EL ID DE LA SALIDA POR EL NOMBRE Y FECHA
            if ($i->salida_id != null) {
                $s  = salidaAlmacen::where('id', '=', $i->salida_id)->first();
                $i->salida_id  = $s->numSalida;
                $i->created_at = $s->fechaSalida;
                $i->areaResponsable = $s->reponsableA ;
                $i->responsable = $s->responsable;
                $i->personal = $s->areaRecepcion." : ".$s->recepcionista;
                $i->areaDestino = $s->areaDestino;
                $i->turno = $s->turno;
            } else {
                $i->salida_id = "Salida Unitaria";
                $i->areaResponsable = "" ;
                $i->responsable = "";
                $i->personal = "";
                $i->areaDestino = $i->destino;
                $i->turno = "";
            }
            
            $c = $c + 1;
        }
        /*$c = 1;
        $Egreso = array();
        $salida = new salidaFila();
        foreach ($salidas as $i) {
            $i->id = $c;
            $salida->n = $c;
            $salida->fecha = 12/12/2022;
            $salida->guiaInterna = $i->guiaInterna;
            $c = $c + 1;
            array_push($Egreso, $salida);
        }*/
        return $salidas;
    }
}
class salidaFila
{
    protected $fillable = [
        'n', 'fecha', 'guiaInterna', 'salida', 'producto', 'cantidad', 'um', 'precioSalida', 'destino', 'observacion'
    ];
}
