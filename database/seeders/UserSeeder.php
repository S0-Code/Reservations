<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::truncate();

        User::create([
            'login' => 'bob',
            'firstname' => 'Bob',
            'lastname' => 'Sull',
            'email' => 'bob@sull.com',
            'password' => Hash::make('12345678'),
            'langue' => 'fr',
            'role' => 'admin',
        ]);

        User::factory()->count(20)->create();
        User::factory()->count(5)->create(['role' => 'press']);
        User::factory()->count(3)->create(['role' => 'affiliate']);
    }
}
