<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageNews extends Model
{
    protected $fillable = [
        'category',
        'title',
        'description',
        'image',
        'published_at',
        'is_featured',
        'button_url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'published_at' => 'date',
        'is_featured' => 'boolean',
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];
}