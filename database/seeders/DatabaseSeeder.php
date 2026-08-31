<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ServiceSeeder::class,
            HomepageBannerSeeder::class,
            HomepageActionSeeder::class,
            HomepageResourceSeeder::class,
            HomepageNewsSeeder::class,
            AboutPageSeeder::class,
            PartnersPageSeeder::class,
        ]);
    }
}
