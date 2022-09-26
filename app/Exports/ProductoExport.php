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
            'codigoProd',
            'nombreProd',
            'categoria_id',
            'marcaProd',
            'um',
            'stock',
        ];
    }
    public function collection()
    {
         $productos = DB::table('productos')->get();
         return $productos;

    }
}