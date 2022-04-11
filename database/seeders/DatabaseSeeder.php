<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'role_id' => 1,
            'name' => 'Muhammad Azka Lufthansa',
            'username' => 'azkalufthansa',
            'email' => 'azkalufthansa3@gmail.com',
            'password' => bcrypt('12345'),
            // 'role' => 'admin'
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Ilham Kurniawan',
            'username' => 'ilhamkurniawan',
            'email' => 'ilhamkurniawan@gmail.com',
            'password' => bcrypt('12345'),
            // 'role' => 'member'
        ]);

        Role::create([
            'role' => 'Admin'
        ]);

        Role::create([
            'role' => 'Member'
        ]);
    }
}
