<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactPage;

class ContactPageSeeder extends Seeder
{
    public function run(): void
    {
        ContactPage::create([
            'intro_paragraph_1' => 'We would love to hear from you. If you have questions or feedback for GEN, please complete this form and a customer service team member will respond within two (2) business days.',

            'intro_paragraph_2' => 'If you prefer, you can also call us at the number below. Voice messages will also be answered within two (2) business days.',

            'intro_paragraph_3' => 'Thanks for your interest in GEN.',

            'phone' => '+1 (202) 683-4100',

            'quote' => 'The Global Entrepreneurship Network operates programs in 200 countries aimed at making it easier for anyone, anywhere to start and scale a business.',

            'facebook_url' => '#',
            'twitter_url' => '#',
            'linkedin_url' => '#',
            'instagram_url' => '#',
        ]);
    }
}