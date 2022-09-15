<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleIngresoAlmacen extends Model
{
    use HasFactory;
    public function ingreso()
    {
        return $this->belongsTo(ingresoAlmacen::class,'factura_id');
    }
    public function producto()
    {
        return $this->belongsTo(producto::class,'product_id');
    }
    public function inventario()
    {
        return $this->belongsTo(inventario::class,'product_id_ingreso');
    }
}
