<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'division',
        'about_me',
        'instagram_url',
        'facebook_url',
        'linkedin_url',
        'image_url',
    ];
}
