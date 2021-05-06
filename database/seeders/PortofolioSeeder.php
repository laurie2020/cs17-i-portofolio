<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-1.jpg")',
            'categorie' => '.filter-app'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-2.jpg")',
            'categorie' => '.filter-web'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-3.jpg")',
            'categorie' => 'filter-app'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-4.jpg")',
            'categorie' => 'filter-card'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-5.jpg")',
            'categorie' => 'filter-web'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-6.jpg")',
            'categorie' => 'filter-app'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-7.jpg")',
            'categorie' => 'filter-card'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-8.jpg")',
            'categorie' => 'filter-card'
        ]);
        DB::table('portofolios')->insert([
            'image' => 'asset("img/portfolio/portfolio-9.jpg")',
            'categorie' => 'filter-web'
        ]);
    }
}
