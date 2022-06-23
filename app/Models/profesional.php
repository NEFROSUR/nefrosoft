<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesional extends Model
{
    use HasFactory;

    public function fuas()
    {
        return $this->hasMany(fua::class,'profesional_id');
    }
}
