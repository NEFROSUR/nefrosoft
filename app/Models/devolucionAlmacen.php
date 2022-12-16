<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devolucionAlmacen extends Model
{
    use HasFactory;

    public function detalleD()
    {
        return $this->hasMany(detalleDevolucionAlmacen::class,'devolucion_id');
    }
}
