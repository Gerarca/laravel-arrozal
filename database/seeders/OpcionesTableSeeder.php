<?php

namespace Database\Seeders;

use App\Models\Opcion;
use Illuminate\Database\Seeder;

class OpcionesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        Opcion::create([
            'title' => 'Facebook',
            'type'  => 'text',
            'name'  => 'facebook',
            'value' => '',
            'group' => '1',
        ]);
        Opcion::create([
            'title'       => 'Iframe_facebook',
            'type'        => 'text',
            'name'        => 'iframe_facebook',
            'value'       => '',
            'placeholder' => 'Pegar etiqueta iframe de facebook',
            'group'       => '1',
        ]);

        Opcion::create([
            'title'       => 'WhatsApp',
            'type'        => 'text',
            'name'        => 'whatsapp',
            'value'       => '',
            'placeholder' => 'Ej: 595971234567',
            'group'       => '1',
        ]);

        Opcion::create([
            'title' => 'Instagram',
            'type'  => 'text',
            'name'  => 'instagram',
            'value' => '',
            'group' => '1',
        ]);
        Opcion::create([
            'title' => 'Mail',
            'type'  => 'text',
            'name'  => 'mail',
            'value' => '',
            'group' => '2',
        ]);
        Opcion::create([
            'title' => 'Teléfono',
            'type'  => 'text',
            'name'  => 'telefono',
            'value' => '',
            'group' => '2',
        ]);
        Opcion::create([
            'title' => 'Dirección',
            'type'  => 'text',
            'name'  => 'direccion',
            'value' => '',
            'group' => '2',
        ]);
        Opcion::create([
            'title'       => 'Enlace',
            'type'        => 'text',
            'name'        => 'enlace',
            'value'       => '',
            'placeholder' => 'enlace maps',
            'group'       => '2',
        ]);
        Opcion::create([
            'title'       => 'Iframe',
            'type'        => 'text',
            'name'        => 'iframe',
            'value'       => '',
            'placeholder' => 'Pegar etiqueta iframe de google',
            'group'       => '2',
        ]);
    }
}
