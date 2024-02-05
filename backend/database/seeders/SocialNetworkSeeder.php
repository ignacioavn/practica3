<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SocialNetwork::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Instagram',
            'url' => 'https://www.instagram.com/ignacio.avr/'
        ]);
        \App\Models\SocialNetwork::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Whatsapp',
            'url' => '+56952186687'
        ]);
        \App\Models\SocialNetwork::create([
            'user_id' => User::where('name','Ignacio')->first()->id,
            'name' => 'Github',
            'url' => 'https://www.github.com/xfunktastic/'
        ]);
    }
}
