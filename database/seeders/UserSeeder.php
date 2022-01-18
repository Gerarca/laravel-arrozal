<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run() {
        User::create([
            'name'              => 'Desarrollo',
            'email'             => 'desarrollo@porta.com.py',
            'email_verified_at' => now(),
            'password'          => Hash::make('desarrollo'),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
