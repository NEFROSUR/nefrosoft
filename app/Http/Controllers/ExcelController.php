<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ProductoExport;
use App\Exports\FacturaExport;
use App\Exports\SalidaExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export(){
        return Excel::download(new ProductoExport, 'productos.xlsx');
    }
    public function exportFacturas(){
        return Excel::download(new FacturaExport, 'facturas.xlsx');
    }
    public function exportSalidas(){
        return Excel::download(new SalidaExport, 'salidas.xlsx');
    }
}
