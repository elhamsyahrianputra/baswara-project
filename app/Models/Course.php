<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'author_id',
        'name',
        'description',
        'cover_url',
        'price',
    ];

    public function categories() {
        return $this->belongstoMany(Category::class, 'course_category', 'course_id', 'category_id');
    }

    public function students() {
        return $this->belongsToMany(User::class, 'course_student');
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function chapters() {
        return $this->hasMany(Chapter::class);
    }
}
