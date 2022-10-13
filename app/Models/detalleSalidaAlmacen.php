<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleSalidaAlmacen extends Model
{
    use HasFactory;

    public function producto()
    {
        return $this->belongsTo(producto::class,'product_id');
    }
    public function salida()
    {
        return $this->belongsTo(salidaAlmacen::class,'salida_id');
    }
    
}
