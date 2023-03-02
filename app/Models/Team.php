<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory, HasUuids ;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'division',
        'biography',
        'instagram_url',
        'facebook_url',
        'linkedin_url',
        'image_url',
    ];
}
