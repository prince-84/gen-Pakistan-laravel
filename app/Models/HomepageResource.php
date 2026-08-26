<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageResource extends Model
{
    protected $fillable = [
        'category',
        'title',
        'description',
        'image',
        'button_text',
        'button_url',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];
}