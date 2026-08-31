<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnersPage extends Model
{
    protected $fillable = [
        'page_heading',
        'introduction',
        'platinum_partners',
        'silver_partners',
        'bronze_partners',
        'ecosystem_partners',
        'partnership_text',
        'apply_url',
        'local_partnership_url',
        'contact_text',
        'contact_person',
        'contact_email',
    ];

    protected $casts = [
        'platinum_partners' => 'array',
        'silver_partners' => 'array',
        'bronze_partners' => 'array',
        'ecosystem_partners' => 'array',
    ];
}