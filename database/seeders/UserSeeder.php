<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Kautsar Al Bana',
            'dateofbirth' => '2000-09-24',
            'title' => 'Web Developer',
            'phone' => '085880846013',
            'email' => 'kautsaralbaa@gmail.com',
            'address' => 'Jl. Raya Bogor',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, laborum aliquam excepturi nulla aut ratione sed officia eius? Doloremque dolore, ex fugit nulla dolor saepe corporis, eligendi cumque impedit ipsa incidunt, assumenda facere. Quasi velit molestias, ipsum quaerat rerum veritatis.',
            'password' => Hash::make('password'),
        ]);
    }
}
