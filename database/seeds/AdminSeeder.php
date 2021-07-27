<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'Admin1',
            'email' => 'rayhanjundi77@gmail.com',
            'nippos' => '1234',
            'password' => Hash::make('anaksholeh'),
            'jabatan' => 'Admin',
            'bagian' => 'Admin',
            'divisi' => 'IT',
            'no_telepon' => '085888250528',
            'role_id' => 1

        ]);
        DB::table('users')->insert([

            'name' => 'Admin2',
            'email' => 'hudanur0509@gmail.com',
            'nippos' => '1233',
            'password' => Hash::make('warnuy123'),
            'jabatan' => 'Admin',
            'bagian' => 'Admin',
            'divisi' => 'IT',
            'no_telepon' => '082210905501',
            'role_id' => 1

        ]);
    }
}
