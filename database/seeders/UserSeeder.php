<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear un usuario de ejemplo
        User::create([
            'name' => 'prueba usuario',
            'email' => 'ejemplo@usuario.com',
            'password' => bcrypt('password'),
        ]);
    }
}
