<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fua extends Model
{
    use HasFactory;

    public function paciente()
    {
        return $this->belongsTo(paciente::class,'paciente_id');
    }
    public function profesional()
    {
        return $this->belongsTo(profesional::class,'profesional_id');
    }

}
