<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopLeadershipPage extends Model
{
    protected $fillable = [
        'leaders',
    ];

    protected $casts = [
        'leaders' => 'array',
    ];
}