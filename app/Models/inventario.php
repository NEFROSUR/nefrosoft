<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;

    public function inventario()
    {
        return $this->belongsTo(inventario::class,'producto_id_inventario');
    }
    public function ingresoAlmacen()
    {
        return $this->hasMany(ingresoAlmacen::class,'product_id_ingreso');
    }
    public function salidaAlmacen()
    {
        return $this->hasMany(salidaAlmacen::class,'product_id_salida');
    }

}
