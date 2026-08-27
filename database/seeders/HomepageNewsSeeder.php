<?php

namespace Database\Seeders;

use App\Models\HomepageNews;
use Illuminate\Database\Seeder;

class HomepageNewsSeeder extends Seeder
{
    public function run(): void
    {
        HomepageNews::create([
            'category' => 'Quarterly Report',
            'title' => 'Strategic Operations Review Recommends Accelerated Digital Transformation Across All Sectors',
            'description' => 'A comprehensive review of corporate operations highlights the critical need for immediate technological upgrades to maintain competitive market advantages and operational efficiency...',
            'image' => 'images/news-featured.png',
            'published_at' => '2026-03-08',
            'is_featured' => true,
            'button_url' => '#',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        HomepageNews::create([
            'category' => 'Press Release',
            'title' => 'Global Expansion Strategy Announced at Annual Summit',
            'description' => null,
            'image' => null,
            'published_at' => '2026-11-16',
            'is_featured' => false,
            'button_url' => '#',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        HomepageNews::create([
            'category' => 'Market Insight',
            'title' => 'Enterprise Technology Adoption Surges in Asia-Pacific Region',
            'description' => null,
            'image' => null,
            'published_at' => '2026-11-14',
            'is_featured' => false,
            'button_url' => '#',
            'sort_order' => 3,
            'is_active' => true,
        ]);

        HomepageNews::create([
            'category' => 'Partnership',
            'title' => 'Strategic Alliance Formed with Regional Investment Leaders',
            'description' => null,
            'image' => null,
            'published_at' => '2026-11-10',
            'is_featured' => false,
            'button_url' => '#',
            'sort_order' => 4,
            'is_active' => true,
        ]);

        HomepageNews::create([
            'category' => 'Event',
            'title' => 'Executive Board Discusses Future Regulatory Compliance Frameworks',
            'description' => null,
            'image' => null,
            'published_at' => '2026-10-28',
            'is_featured' => false,
            'button_url' => '#',
            'sort_order' => 5,
            'is_active' => true,
        ]);
    }
}