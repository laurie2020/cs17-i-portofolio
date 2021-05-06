<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(FactSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(PortofolioSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
