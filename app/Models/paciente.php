<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;
    
    public function fuas()
    {
        return $this->hasMany(fua::class,'paciente_id');
    }
}
