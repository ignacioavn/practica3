<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Hobbie::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Jugar fútbol'
        ]);
        \App\Models\Hobbie::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Ir al gimnasio'
        ]);
        \App\Models\Hobbie::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Tocar guitarra'
        ]);
    }
}
