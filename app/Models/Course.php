<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Course extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'cover_url',
        'price',
    ];

    public function categories() {
        return $this->belongstoMany(Category::class, 'course_categories', 'course_id', 'category_id');
    }

    public function students() {
        return $this->belongsToMany(User::class, 'course_students');
    }

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function chapters() {
        return $this->hasMany(Chapter::class);
    }
}
