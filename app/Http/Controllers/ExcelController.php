<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ProductoExport;
use App\Exports\FacturaExport;
use App\Exports\SalidaExport;
use App\Exports\InventarioExport;
use App\Exports\MovimientosExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export(){
        return Excel::download(new ProductoExport, 'Productos Nefrosur E.I.R.L..xlsx');
    }
    public function exportFacturas(){
        return Excel::download(new FacturaExport, 'Facturas Nefrosur E.I.R.L..xlsx');
    }
    public function exportSalidas(){
        return Excel::download(new SalidaExport, 'Salidas Nefrosur E.I.R.L..xlsx');
    }
    public function exportarInventario(){
        return Excel::download(new InventarioExport, 'Inventario Nefrosur E.I.R.L..xlsx');
    }
    public function exportarMovimientos($id){
        return Excel::download(new MovimientosExport($id), 'Movimientos Nefrosur E.I.R.L..xlsx');
    }
}
