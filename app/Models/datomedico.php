<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datomedico extends Model
{
    use HasFactory;

    public function paciente()
    {
        return $this->belongsTo(paciente::class,'paciente_id');
    }
}
