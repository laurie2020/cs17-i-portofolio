<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'language' => 'HTML',
            'level' => '100'
        ]);
        DB::table('skills')->insert([
            'language' => 'CSS',
            'level' => '90'
        ]);
        DB::table('skills')->insert([
            'language' => 'Javascript',
            'level' => '75'
        ]);
        DB::table('skills')->insert([
            'language' => 'PHP',
            'level' => '80'
        ]);
        DB::table('skills')->insert([
            'language' => 'WordPress/CMS',
            'level' => '90'
        ]);
        DB::table('skills')->insert([
            'language' => 'Photoshop',
            'level' => '55' 
        ]);
    }
}
