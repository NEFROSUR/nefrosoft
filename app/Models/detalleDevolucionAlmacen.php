<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleDevolucionAlmacen extends Model
{
    use HasFactory;
    public function devolucion()
    {
        return $this->belongsTo(devolucionAlmacen::class,'devolucion_id');
    }
    public function producto()
    {
        return $this->belongsTo(producto::class,'product_id');
    }
}
