<?php

namespace Database\Seeders;

use App\Models\Collaboration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollaborationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collaboration::create([
            'name' => 'Fatoni University',
            'url_to' => 'ftu.ac.th',
            'image_url' => 'collaboration-image/IVR5mGfsJW5uGOmJBsPMuiZLdJyLKtYwkZBA3qQp.png',
        ]);

        Collaboration::create([
            'name' => 'Yale University',
            'url_to' => 'www.yale.edu',
            'image_url' => 'collaboration-image/77loxktqsGSwoJzPr3xX6sh5SivF9OVaEZlCLN4t.png',
        ]);

        Collaboration::create([
            'name' => 'Thammasat University',
            'url_to' => 'tu.ac.th/en',
            'image_url' => 'collaboration-image/4PVnqy4h0DWf2CAL4Ab6AMmdjKV3ZOgwhkCKJofB.svg',
        ]);

        Collaboration::create([
            'name' => 'Narasi Budaya',
            'url_to' => 'narasibudaya.com',
            'image_url' => 'collaboration-image/Zux1l8j4qyE2gpGSA8B9XNFKh7FmHIQlTc9ebEpJ.png',
        ]);

        Collaboration::create([
            'name' => 'ADOBSI',
            'url_to' => 'adobsi.org',
            'image_url' => 'collaboration-image/lXXTzODRG8evkV02MjR7KSmEW3kgR0366KLyEfRk.png',
        ]);
    }
}
