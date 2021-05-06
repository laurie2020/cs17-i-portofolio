<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'birthdate' => '1995/05/01',
            'lastname' => 'Smith',
            'firstname' => "Alex",
            'website' => 'www.example.com',
            'phoneNumber' => '+123 456 7890',
            'city' => 'New York, USA',
            'age' => '30',
            'degree' => 'Master',
            'email' => 'email@example.com',
            'freelance' => 'Available'
        ]);
    }
}
