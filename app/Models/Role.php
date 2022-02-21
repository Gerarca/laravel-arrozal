<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	public const ROL_ADMINISTRADOR = 1;
    public const ROL_USUARIO = 2;
    public const ROL_INVITADO = 3;
	public const ROL_CLIENTE = 4;

    public function users()
	{
        return $this
            ->belongsToMany('App\Models\User')
            ->withTimestamps();
	}
}
