<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArrozalesImagene extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagen',
    ];
}
