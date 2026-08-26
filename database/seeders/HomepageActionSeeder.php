<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomepageAction;

class HomepageActionSeeder extends Seeder
{
    public function run(): void
    {
        HomepageAction::create([
            'label' => 'Global Situations',

            'heading' => 'Strategic Global Involvement',

            'description' => 'Partnering with forward-thinking enterprises to drive economic growth and expand strategic global influence. Join our network of top-tier executives and founders to shape the future of enterprise innovation.',

            'primary_button_text' => 'Initiate Partnership',
            'primary_button_url' => '/contact',

            'secondary_button_text' => 'Corporate Access',
            'secondary_button_url' => '/about',

            'quote' => 'In the modern economic landscape, enterprise agility and bold strategic partnerships are the true drivers of sustainable global success.',

            'author_name' => 'Executive Board',
            'author_role' => 'Global Strategy Group',

            'author_image' => 'images/author.png',
        ]);
    }
}