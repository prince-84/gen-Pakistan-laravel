<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnersPage extends Model
{
    protected $fillable = [
        'partner_sections',
    ];

    protected $casts = [
        'partner_sections' => 'array',
    ];
}