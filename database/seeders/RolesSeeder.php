<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'Administrador',
            'description' => 'administrador',
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Usuario',
            'description' => 'usuario',
        ]);

        Role::create([
            'id' => 3,
            'name' => 'Invitado',
            'description' => 'invitado',
        ]);

        Role::create([
            'id' => 4,
            'name' => 'Cliente',
            'description' => 'cliente',
        ]);
    }
}
