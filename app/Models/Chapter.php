<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Chapter extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'course_id',
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function theories() {
        return $this->hasMany(Theory::class);
    }
}
