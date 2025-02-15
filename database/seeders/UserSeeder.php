<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Chairil',
            'username' => 'Chairil',
            'email' => 'Chairils@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ayamkate12'),
            'remember_token' => Str::random(10)
        ]);
        //
        User::factory(5)->create();
    }
}
