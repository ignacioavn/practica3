<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Framework::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'HTML',
            'difficulty' => 'Fácil',
            'experience' => '8 meses',
        ]);
        \App\Models\Framework::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'CSS',
            'difficulty' => 'Intermedio',
            'experience' => '6 meses',
        ]);
        \App\Models\Framework::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Javascript',
            'difficulty' => 'Difícil',
            'experience' => '4 meses',
        ]);
    }
}
