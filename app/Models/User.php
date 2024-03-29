<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'avatar_url',
        'password',
        'email',
        'gender',
        'birthdate',
        'about_me',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function authorCourses() {
        return $this->hasMany(Course::class);
    }

    public function courses() {
        return $this->belongsToMany(Course::class, 'course_students', 'student_id', 'course_id');
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }

    public function role() {
        return $this->belongsToMany(Role::class, 'user_has_roles', 'user_id', 'role_id');
    }
}
