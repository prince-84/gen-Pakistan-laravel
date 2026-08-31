<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutPage;

class AboutPageSeeder extends Seeder
{
    public function run(): void
    {
        AboutPage::create([
            'page_heading' => 'About GEN',

            'video_title' => "Want to Help Solve the World's Hardest Problems?",
            'video_url' => '',

            'article_heading' => 'Building One Global Entrepreneurship Ecosystem',

            'article_content' => <<<'TEXT'
The Global Entrepreneurship Network operates in 200 countries with a mission to make it easier for anyone, anywhere, to start and scale a business.

By fostering deeper cross-border collaboration between founders, investors, policymakers, ecosystem builders and others, GEN fuels healthier and more efficient local and national entrepreneurship ecosystems. Network members collaborate to democratize opportunity, drive economic mobility, create new jobs and grow economies while developing the conditions for entrepreneurs to solve the world's toughest challenges.

No matter what one's role is in the ecosystem, GEN works to help everyone succeed. GEN connects entrepreneurs with opportunities to learn, start and scale. It matches investors with up-and-coming founders primed to disrupt industries and change the world as we know it. It shares the best and brightest policies among governments seeking to grow their economies. And, GEN brings ecosystem builders and experts together to benchmark, track and share innovative programs.
TEXT,

            'core_pillars' => [
                [
                    'name' => 'GEN Founders',
                    'description' => 'Helping bold, disruptive innovators reach their full potential',
                ],
                [
                    'name' => 'GEN Invest',
                    'description' => 'Getting the right capital in the right hands at the right time',
                ],
                [
                    'name' => 'GEN Policy',
                    'description' => 'Sharing evidence-based ideas for smart policy design to help entrepreneurs thrive',
                ],
                [
                    'name' => 'GEN Ecosystems',
                    'description' => 'Building stronger and more globally-connected entrepreneurial ecosystems',
                ],
            ],

            'impact_heading' => 'Annual Impact',

            'impact_items' => [
                '2.24 million entrepreneurs supported',
                '$4M+ in funding mobilized for entrepreneurs',
                '1,000+ partnerships with entrepreneurial support organizations',
                '300 policy/market engaged',
            ],
        ]);
    }
}