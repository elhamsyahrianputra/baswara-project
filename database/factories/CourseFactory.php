<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => User::all()->random()->id,
            'name' => $this->faker->sentence(mt_rand(2,6)),
            'description' => $this->faker->sentence(20),
            'cover_url' => 'course/course-cover/cover.jpg',
            'price' => $this->faker->randomNumber(6, true),
        ];
    }
}
