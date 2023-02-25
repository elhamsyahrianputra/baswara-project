<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'programming',
            'description' => 'Merupakan pembelajaran yang berfokus mengulas beberapa bahasa Pemrograman'
        ]);
        Category::create([
            'name' => 'language',
            'description' => 'Mempelajari dasar-dasar bahasa asing'
        ]);
        Category::create([
            'name' => 'art',
            'description' => 'Pembelajaran yang mengajarkan difinisi-definisi seni'
        ]);
        Category::create([
            'name' => 'bisnis',
            'description' => 'Mempelajari bagaimana melihat peluang serta celah dalam berbisnis'
        ]);
    }
}
