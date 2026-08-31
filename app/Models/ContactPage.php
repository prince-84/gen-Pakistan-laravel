<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable = [
        'intro_paragraph_1',
        'intro_paragraph_2',
        'intro_paragraph_3',
        'phone',
        'quote',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url',
    ];
}