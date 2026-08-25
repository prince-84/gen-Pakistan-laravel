<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'title' => 'Business Consultancy Services',
            'description' => 'Comprehensive advisory and support for business development and strategic growth.',
            'features' => [
                'Entrepreneurship advisory',
                'Startup mentorship and incubation support',
                'Business strategy development',
                'Market research and analysis',
            ],
            'icon' => 'briefcase',
            'sort_order' => 1,
        ]);

        Service::create([
            'title' => 'Training and Development Services',
            'description' => 'Skill development and educational programs designed for modern entrepreneurs.',
            'features' => [
                'Entrepreneurship workshops and seminars',
                'Skill development programs for entrepreneurs',
                'Online courses and certification programs',
            ],
            'icon' => 'graduation-cap',
            'sort_order' => 2,
        ]);

        Service::create([
            'title' => 'Networking and Event Services',
            'description' => 'Strategic networking and corporate event planning for the business community.',
            'features' => [
                'Hosting business conferences and networking events',
                'Organizing entrepreneurship expos and summits',
                'Event planning and coordination',
            ],
            'icon' => 'users',
            'sort_order' => 3,
        ]);

        Service::create([
            'title' => 'Marketing and Promotional Services',
            'description' => 'Brand development and digital marketing strategies for startups and founders.',
            'features' => [
                'Brand development for startups',
                'Social media and digital marketing',
                'Public relations and promotional campaigns',
            ],
            'icon' => 'pen-tool',
            'sort_order' => 4,
        ]);

        Service::create([
            'title' => 'Investment and Funding Advisory',
            'description' => 'Fundraising consulting and financial modeling for investment readiness.',
            'features' => [
                'Investor relations and fundraising',
                'Crowdfunding support and pitch prep',
                'Financial modeling and projections',
            ],
            'icon' => 'dollar-sign',
            'sort_order' => 5,
        ]);

        Service::create([
            'title' => 'Technology and Innovation Consulting',
            'description' => 'Digital transformation and innovation strategies for new business models.',
            'features' => [
                'Tech solutions (Web & App development)',
                'Digital transformation advisory',
                'Innovation strategy for business models',
            ],
            'icon' => 'globe',
            'sort_order' => 6,
        ]);
    }
}