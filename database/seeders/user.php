<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        $user = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role_id' => 'admin',
        ]);
        $user = \App\Models\User::create([
            'name' => 'Haris',
            'email' => 'haris@gmail.com',
            'password' => bcrypt('haris123'),
            'role_id' => 'user',
        ]);
        $user = \App\Models\User::create([
            'name' => 'Putri',
            'email' => 'putri@gmail.com',
            'password' => bcrypt('putri123'),
            'role_id' => 'admin',
        ]);
    }
}
