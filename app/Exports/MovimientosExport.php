<?php

namespace App\Exports;

use App\Models\detalleIngresoAlmacen;
use App\Models\detalleSalidaAlmacen;
use App\Models\devolucionAlmacen;
use App\Models\detalleDevolucionAlmacen;
use App\Models\producto;
use App\Models\ingresoAlmacen;
use App\Models\salidaAlmacen;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Support\Facades\DB;

class MovimientosExport implements FromArray
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        return $this->data;
    }

}