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
            'name' => 'Apa itu Bahasa Pemrograman',
            'chapter_id' => $chapters[0]->id,
            'speaker' => 'Muhammad Hardiansyah',
            'description' => 'Apa sih bahasa pemrograman itu? Bahasa pemrograman adalah bahasa yang berisi perintah perintah yang bisa dieksekusi oleh sebuah computer',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Perkembangan Bahasa Pemrograman',
            'chapter_id' => $chapters[0]->id,
            'speaker' => 'Muhammad Hardiansyah',
            'description' => 'Perkembangan bahasa pemrograman sangat pesat di era modern ini',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Fungsi Bahasa Pemrograman',
            'chapter_id' => $chapters[0]->id,
            'speaker' => 'Muhammad Hardiansyah',
            'description' => 'Bahasa pemrograman berfungsi untuk memberikan baris perintah yang bisa diterjemahkan oleh komputer',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Apa itu bahasa pemrograman python?',
            'chapter_id' => $chapters[1]->id,
            'speaker' => 'Muhammad Hardiansyah',
            'description' => 'Python merupakan salah satu bahasa pemrograman dari sekian banyak bahasa pemrograman yang telah diciptakan',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Variable',
            'chapter_id' => $chapters[2]->id,
            'speaker' => 'Muhammad Hardiansyah',
            'description' => 'variabel adalah lokasi penyimpanan dan terkait nama simbolis yang berisi beberapa kuantitas yang diketahui atau tidak diketahui atau informasi, nilai.',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Pengkondisian',
            'chapter_id' => $chapters[2]->id,
            'speaker' => 'Muhammad Hardiansyah',
            'description' => 'Pengkondisian adalah bari perintah yang akan dijalankan jika memenuhi suatu kondisi tertentu',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Huruf Alfabet',
            'chapter_id' => $chapters[3]->id,
            'speaker' => 'Marsha Lenathea',
            'description' => 'Alfabet adalah sebuah sistem tulisan yang berdasarkan lambang fonem vokal dan konsonan. Kata alfabet diambil dari bahasa Yunani, dari dua huruf pertama tulisan mereka yaitu alfa dan beta',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Huruf Alfabet',
            'chapter_id' => $chapters[3]->id,
            'speaker' => 'Marsha Lenathea',
            'description' => 'Alfabet adalah sebuah sistem tulisan yang berdasarkan lambang fonem vokal dan konsonan. Kata alfabet diambil dari bahasa Yunani, dari dua huruf pertama tulisan mereka yaitu alfa dan beta',
            'video_url' => 'video-default.mp4',
        ]);
        Theory::create([
            'name' => 'Perkembangan bahasa indonesia',
            'chapter_id' => $chapters[3]->id,
            'speaker' => 'Marsha Lenathea',
            'description' => 'bahasa indonesia adalah bahasa resmi negera republik indonesia.',
            'video_url' => 'video-default.mp4',
        ]);
    }
}
