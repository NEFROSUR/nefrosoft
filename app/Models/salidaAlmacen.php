<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salidaAlmacen extends Model
{
    use HasFactory;

    public function inventario()
    {
        return $this->belongsTo(inventario::class,'product_id_salida');
    }
}
