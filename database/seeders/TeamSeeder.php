<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
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
                'id' => Str::orderedUuid(),
                'name' => $name = fake()->name(),
                'division' => 'Sebelas Maret Unviersity',
                'biography' => "hello my name is $name. I'm 20 years old. Now I'm studying March eleventh university and have been running for 6 semesters. I live in the Solo City area, more precisely near the Solo Palace. Solo is famous for its sweet food and also in Solo there are many interesting tourist spots that can be visited by many tourists such as heritage places, palaces, squares, and many more.",
                'instagram_url' => "www.instagram.com/baswara.uns/",
                'facebook_url' => "www.facebook.com",
                'linkedin_url' => "id.linkedin.com",
                'image_url' => "team/team-image/$i.png",
            ]);
        }
    }
}
