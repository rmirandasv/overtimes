<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
            'role'  => 'ADMIN'
        ]);

        \DB::table('roles')->insert([
            'role'  => 'EMPLOYEE'
        ]);
    }
}
