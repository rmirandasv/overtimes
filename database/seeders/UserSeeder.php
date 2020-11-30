<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name'              => 'Manager',
            'last_name'         => 'Admin',
            'username'          => 'manager',
            'password'          => '$2y$10$KD6hJyHfPJ/baxrdBd2aCOYHrBmS34HbSRNYpY64sPf01yAZR0Vkq',
            'active'            => 1,
            'locked'           => 0,
            'role_id'           => 1
        ]);
    }
}
