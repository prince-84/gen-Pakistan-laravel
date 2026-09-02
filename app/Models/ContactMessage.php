<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
        'status',
        'is_starred',
    ];

    protected function casts(): array
    {
        return [
            'is_starred' => 'boolean',
        ];
    }
}