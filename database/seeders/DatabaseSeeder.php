<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'level' => 'Admin'
        ]);

        User::create([
            'nama' => 'Alumni',
            'email' => 'alumni@gmail.com',
            'password' => bcrypt('12345678'),
            'level' => 'Alumni'
        ]);
    }
}
