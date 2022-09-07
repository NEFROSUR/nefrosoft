<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    /*public function categoriaP()
    {
        return $this->belongsTo(categoriaP::class,'categoria_id');
    }
    public function inventario()
    {
        return $this->hasMany(inventario::class,'producto_id_inventario');
    }*/
}
