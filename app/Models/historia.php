<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historia extends Model
{
    use HasFactory;
    
    public function fuas()
    {
        return $this->belongsTo(profesional::class,'correlativo');
    }
}
