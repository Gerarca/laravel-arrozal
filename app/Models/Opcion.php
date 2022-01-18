<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model {
    protected $table = 'opciones';

    protected $fillable = [
        'title', 'type', 'name', 'value', 'placeholder', 'group',
    ];
}
