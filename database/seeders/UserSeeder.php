<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'age' => 30,
        ]);

        User::create([
            'name' => 'Alice Smith',
            'email' => 'alice.smith@example.com',
            'age' => 25,
        ]);

        User::create([
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'age' => 22,
        ]);

        User::create([
            'name' => 'Charlie Brown',
            'email' => 'charlie.brown@example.com',
            'age' => 29,
        ]);
    }
}
