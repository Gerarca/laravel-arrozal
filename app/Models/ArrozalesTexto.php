<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrozalesTexto extends Model
{
    use HasFactory;
    protected $fillable = [
        'texto','texto_en'
    ];
}
