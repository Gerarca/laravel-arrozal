<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'direccion', 'direccion_en', 'telefono', 'email', 'horario', 'horario_en', 'instagram', 'facebook', 'linkedin',
    ];
}
