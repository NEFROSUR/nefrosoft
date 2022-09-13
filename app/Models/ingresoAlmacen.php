<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingresoAlmacen extends Model
{
    use HasFactory;

    public function productos()
    {
        return $this->belongsTo(producto::class,'product_id');
    }
    public function proveedores()
    {
        return $this->belongsTo(proveedor::class,'proveedor_id');
    }
    public function inventario()
    {
        return $this->belongsTo(inventario::class,'product_id_ingreso');
    }
}
