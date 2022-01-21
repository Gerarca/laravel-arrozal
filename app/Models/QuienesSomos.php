<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuienesSomos extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion', 'mision', 'vision', 'valores', 'imagen',
    ];
}