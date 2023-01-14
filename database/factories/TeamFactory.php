<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $order = 1;
        return [
            'name' => $name = fake()->name(),
            'division' => 'Sebelas Maret University',
            'description' => "hello my name is " . $name .  "I'm 20 years old. Now I'm studying Sebelas Maret university and have been running for 6 semesters. I live in the Solo City area, more precisely near the Solo Palace. Solo is famous for its sweet food and also in Solo there are many interesting tourist spots that can be visited by many tourists such as heritage places, palaces, squares, and many more.",
            'image_url' => 'img/team/'. $order++,
        ];
    }
}
