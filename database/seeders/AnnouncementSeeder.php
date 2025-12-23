<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Announcement::create([
            'judul' => 'Pengumuman Desa',
            'slug' => 'pengumuman-desa',
            'views' => 0,
            'excerpt' => 'Pengumuman resmi desa',
            'isi_pengumuman' => 'Isi lengkap pengumuman desa',
            'user_id' => 1
        ]);
    }
}
