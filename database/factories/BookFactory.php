<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,6)),
            'slug'  => $this->faker->slug(),
            'cover_url' => 'books/book-cover/book-cover.jpg',
            'pdf_url' => 'books/book-pdf/book.pdf',
            'publisher' => $this->faker->company(),
            'author' => $this->faker->name(),
            'isbn' => '-',
            'edition' => '-',
            'published_at' => Carbon::parse('2022-04-22'),
        ];
    }
}
