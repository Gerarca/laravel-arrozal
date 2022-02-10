<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'texto', 'imagen',
        'titulo_en', 'texto_en', 'imagen_en',
    ];
}
