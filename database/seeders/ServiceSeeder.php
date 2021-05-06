<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icone' => 'icofont-computer',
            'title' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident'
        ]);
        DB::table('services')->insert([
            'icone' => 'icofont-chart-bar-graph',
            'title' => 'Dolor Sitema',
            'description' => 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata'
        ]);
        DB::table('services')->insert([
            'icone' => 'icofont-earth',
            'title' => 'Sed ut perspiciatis',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur'
        ]);
        DB::table('services')->insert([
            'icone' => 'icofont-image',
            'title' => 'Magni Dolores',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'
        ]);
        DB::table('services')->insert([
            'icone' => 'icofont-settings',
            'title' => 'Nemo Enim',
            'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque'
        ]);
        DB::table('services')->insert([
            'icone' => 'icofont-tasks-alt',
            'title' => 'Eiusmod Tempor',
            'description' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi'
        ]);
    }
}
