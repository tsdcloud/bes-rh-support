<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fname'=>'Admin BES',
                'lname'=>'ADMIN BES',
                'phone'=>'677809159',
                'email'=>'tsd@bfclimited.com',
                'password'=>Hash::make('adminbes'),
            ]
        ]);
    }
}
