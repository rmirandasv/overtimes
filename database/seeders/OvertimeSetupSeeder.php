<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OvertimeSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('overtime_setup')->insert([
            'param' =>  'PUBLIC_OVERTIME_COSTS',
            'value' =>  'T'
        ]);

        \DB::table('overtime_setup')->insert([
            'param' =>  'LOGIN_ATTEMPS_TO_LOCK',
            'value' =>  '5'
        ]);
    }
}
