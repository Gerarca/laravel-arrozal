<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuienesSomos extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion', 'mision', 'vision', 'valores', 'imagen',
        'descripcion_en', 'mision_en', 'vision_en', 'valores_en', 'imagen_en',
    ];
}
