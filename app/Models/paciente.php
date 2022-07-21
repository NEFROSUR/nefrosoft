<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'dni', 'primerNombre', 'otroNombre', 'apellidoPaterno', 'apellidoMaterno', 'fechaNacimiento', 'direccion', 'numHistoria', 'regimen', 'numAfiliacion', 'fechaAfiliacion', 'frecuencia', 'estado' 
    ];
    
    public function fuas()
    {
        return $this->hasMany(fua::class,'paciente_id');
    }
}
