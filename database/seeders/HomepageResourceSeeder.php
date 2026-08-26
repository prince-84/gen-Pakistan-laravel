<?php

namespace Database\Seeders;

use App\Models\HomepageResource;
use Illuminate\Database\Seeder;

class HomepageResourceSeeder extends Seeder
{
    public function run(): void
    {
        HomepageResource::create([
            'category' => 'Framework',
            'title' => 'Global Enterprise Frameworks',
            'description' => 'Comprehensive methodologies for scaling international operations and securing foreign investments in emerging markets.',
            'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop',
            'button_text' => 'Download Briefing',
            'button_url' => '#',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        HomepageResource::create([
            'category' => 'Innovation',
            'title' => 'Corporate Innovation Guidelines',
            'description' => 'Strategic playbooks for fostering internal innovation, R&D excellence, and technology transfer in agile environments.',
            'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop',
            'button_text' => 'Download Briefing',
            'button_url' => '#',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        HomepageResource::create([
            'category' => 'Insights',
            'title' => 'Executive Policy Insights 2026',
            'description' => 'In-depth analysis of emerging digital ecosystems, AI governance, and global compliance for C-suite leaders.',
            'image' => 'https://images.unsplash.com/photo-1579711869674-0581d1bd1f6c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fEV4ZWN1dGl2ZSUyMHBvbGljeXxlbnwwfHwwfHx8MA%3D%3D',
            'button_text' => 'Download Briefing',
            'button_url' => '#',
            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}