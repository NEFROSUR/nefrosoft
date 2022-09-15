<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingresoAlmacen extends Model
{
    use HasFactory;

    public function detalle()
    {
        return $this->hasMany(detalleIngresoAlmacen::class,'factura_id');
    }
    public function proveedor()
    {
        return $this->belongsTo(proveedor::class,'proveedor_id');
    }
}
