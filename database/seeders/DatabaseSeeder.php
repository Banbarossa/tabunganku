<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Banbarossa',
            'email' => 'banbarossa@gmail.com',
            'role_id' => 'Admin',
            'password' => bcrypt('P4ssw0rd'),
        ]);
    }
}
