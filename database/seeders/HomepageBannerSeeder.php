<?php

namespace Database\Seeders;

use App\Models\HomepageBanner;
use Illuminate\Database\Seeder;

class HomepageBannerSeeder extends Seeder
{
    public function run(): void
    {
        HomepageBanner::create([
            'label' => 'Accelerate Growth',
            'heading' => 'Join the Global Network of Forward-Thinking Enterprise Leaders',
            'description' => 'Unlock exclusive access to strategic resources, high-level networking, and global market expansion opportunities. We empower visionary businesses to scale globally.',
            'background_image' => 'images/corporate_banner_bg.png',
        ]);
    }
}