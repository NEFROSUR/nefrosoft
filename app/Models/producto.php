<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;    
    public function ingreso()
    {
        return $this->hasMany(detalleIngresoAlmacen::class,'product_id');
    }
}
