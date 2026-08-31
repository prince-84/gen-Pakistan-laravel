<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $fillable = [
        'page_heading',
        'video_title',
        'video_url',
        'article_heading',
        'article_content',
        'core_pillars',
        'impact_heading',
        'impact_items',
    ];

    protected $casts = [
        'core_pillars' => 'array',
        'impact_items' => 'array',
    ];
}
