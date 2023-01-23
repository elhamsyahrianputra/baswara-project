<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id' => Str::orderedUuid(),
                'name' => 'Programming',
                'description' => 'Merupakan pembelajaran yang berfokus mengulas beberapa bahasa Pemrograman'
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => 'Language',
                'description' => 'Mempelajari dasar-dasar bahasa asing'
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => 'Art',
                'description' => 'Pembelajaran yang mengajarkan difinisi-definisi seni'
            ],
            [
                'id' => Str::orderedUuid(),
                'name' => 'Bisnis',
                'description' => 'Mempelajari bagaimana melihat peluang serta celah dalam berbisnis'
            ],
        ];

        DB::table('categories')->insert($category);
    }
}
