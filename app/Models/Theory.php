<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Theory extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'chapter_id',
        'speaker',
        'description',
        'video_url',
    ];

    public function chapter() {
        return $this->belongsTo(Chapter::class);
    }
}
