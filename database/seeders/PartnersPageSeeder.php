<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartnersPage;

class PartnersPageSeeder extends Seeder
{
    public function run(): void
    {
        PartnersPage::create([
            'page_heading' => 'Partners',

            'introduction' => <<<'TEXT'
The Global Entrepreneurship Network is a dynamic organization that is supported through partnerships in the global community. We would particularly like to acknowledge the Partners here for their contributions.
TEXT,

            'platinum_partners' => [
                'Kauffman Foundation',
                'WELLS FARGO',
            ],

            'silver_partners' => [
                'Empower',
                'HELLO ALICE',
                'INDIANA THE BOLD',
                'YBI',
            ],

            'bronze_partners' => [],

            'ecosystem_partners' => [
                'GLOBAL',
                'X-PARTNER',
                'Startup Universe',
            ],

            'partnership_text' => <<<'TEXT'
If you are interested in belonging to a world-class partnership with GEN, please apply here. Please note that GEN requires a minimum of three year partnership timeline for all of the partners listed on this page. If you would like to engage in more local programs, for further information please visit partnerships.genglobal.org and the appropriate country link in the Countries dropdown menu.
TEXT,

            'apply_url' => '#',

            'local_partnership_url' => 'https://partnerships.genglobal.org',

            'contact_text' => 'For questions about sponsorship or partner relationships, please contact',

            'contact_person' => 'Alejandra Molina',

            'contact_email' => 'alejandra@genglobal.org',
        ]);
    }
}