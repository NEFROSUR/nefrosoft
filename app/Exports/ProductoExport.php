<?php

namespace App\Exports;

use App\Models\producto;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class ProductoExport implements FromCollection,WithHeadings
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
            'Id de Categoria',
            'Categoria',
            'Marca',
            'Unidad de Medida',
            'um',
            'stock',
            'Precio Unitario Promedio',
            'Fecha de Creacion',
            'Fecha de Actualizacion',
        ];
    }
    public function collection()
    {
         $productos = DB::table('productos')->get();
         return $productos;

    }
}