<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use \App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Team::factory(9)->create();

        for ($i=1; $i < 10; $i++) { 
            DB::table('teams')->insert([
                'name' => "$i",
                'division' => 'Sebelas Maret Unviersity',
                'description' => "hello my name is $i. I'm 20 years old. Now I'm studying March eleventh university and have been running for 6 semesters. I live in the Solo City area, more precisely near the Solo Palace. Solo is famous for its sweet food and also in Solo there are many interesting tourist spots that can be visited by many tourists such as heritage places, palaces, squares, and many more.",
                'instagram' => "https://www.instagram.com/baswara.uns/",
                'facebook' => "https://www.facebook.com",
                'linkedin' => "https://id.linkedin.com",
                'image_url' => "img/team/$i.png",
            ]);
        }
    }
}
