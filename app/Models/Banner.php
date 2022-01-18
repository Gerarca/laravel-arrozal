<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'subtitulo', 'enlace', 'boton', 'imagen', 'orden', 'user_id', 'visible',
    ];
}
