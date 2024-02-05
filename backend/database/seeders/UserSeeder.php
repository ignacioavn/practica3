<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Ignacio',
            'lastname' => 'Avendaño Ramirez',
            'age' =>  22,
            'email' => 'ignacio.avendano@alumnos.ucn.cl',
            'city' => 'Antofagasta',
            'country' => 'Chile',
            'summary' => 'Este es mi portafolio en donde encontrarás todo acerca de mí.'
        ]);
    }
}
