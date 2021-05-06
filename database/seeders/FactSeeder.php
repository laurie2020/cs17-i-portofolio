<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'icone'=> 'icofont-simple-smile',
            'number' => 232,
            'description' => 'Happy Clients consequuntur quae',
            'created_at' => now()
        ]);

        DB::table('facts')->insert([
            'icone' => 'icofont-document-folder',
            'number' => 521,
            'description' => 'Projects adipisci atque cum quia aut',
            'created_at' => now()
        ]);

        DB::table('facts')->insert([
            'icone' => 'icofont-live-support',
            'number' => 1.463,
            'description' => 'Hours Of Support aut commodi quaerat',
            'created_at' => now()
        ]);

        DB::table('facts')->insert([
            'icone' => 'icofont-users-alt-5',
            'number' => 15,
            'description' => 'Hard Workers rerum asperiores dolor',
            'created_at' => now()
        ]);
    }
}
