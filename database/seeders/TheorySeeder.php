<?php

namespace Database\Seeders;

use App\Models\Course;

use App\Models\Theory;
use App\Models\Chapter;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TheorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chapters = Chapter::all(['id']);

        Theory::create([
            'name' => 'Huruf Alfabet',
            'chapter_id' => $chapters[0]->id,
            'speaker' => 'Marsha Lenathea',
            'description' => 'Alfabet adalah sebuah sistem tulisan yang berdasarkan lambang fonem vokal dan konsonan. Kata alfabet diambil dari bahasa Yunani, dari dua huruf pertama tulisan mereka yaitu alfa dan beta',
            'video_url' => 'theory-video/video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Perkembangan bahasa indonesia',
            'chapter_id' => $chapters[0]->id,
            'speaker' => 'Marsha Lenathea',
            'description' => 'bahasa indonesia adalah bahasa resmi negera republik indonesia.',
            'video_url' => 'theory-video/video-default.mp4',
        ]);
    }
}
