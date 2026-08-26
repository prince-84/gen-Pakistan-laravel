<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageAction extends Model
{
    protected $fillable = [
        'label',
        'heading',
        'description',
        'primary_button_text',
        'primary_button_url',
        'secondary_button_text',
        'secondary_button_url',
        'quote',
        'author_name',
        'author_role',
        'author_image',
    ];
}