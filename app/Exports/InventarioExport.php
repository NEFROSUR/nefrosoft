<?php

namespace App\Exports;

use App\Models\producto;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class InventarioExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'id',
            'Codigo del Producto',
            'Nombre del Producto',
            'Stock',
            'Precio Promedio',
            'Ultima Actualizacion',
            'Precio Total en Stock',
        ];
    }
    public function collection()
    {
        $productos = producto::where('stock', '>', '0')->select('id','codigoProd','nombreProd','stock','precioProm','updated_at')->get();
        $total = 0;
        $c = 1;
        foreach($productos as $i){
            $i->id = $c;
            $i->precioTotal = $i->stock * $i->precioProm;
            $c = $c + 1;
        }
         return $productos;

    }
}