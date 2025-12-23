<?php

namespace Database\Seeders;

use App\Models\VideoProfil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        VideoProfil::create([
            'url_video' => 'https://www.youtube.com/embed/J9o6L_6LCzI?si=-N-Se_RGic741hfT',
            'user_id' => 1
        ]);
    }
}
