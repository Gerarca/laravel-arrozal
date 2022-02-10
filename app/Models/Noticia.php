<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'fuente', 'enlace', 'imagen',
        'titulo_en', 'fuente_en', 'enlace_en', 'imagen_en',
    ];
}
