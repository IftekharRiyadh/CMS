<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Insert a default user
        DB::table('users')->insert([
            'name' => 'Riad',
            'email' => 'riyadh7030@gmail.com',
            'password' => Hash::make('12345678@'),
        ]);
    }
}
