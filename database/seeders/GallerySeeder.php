<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Gallery::create([
            'gambar' => 'img-gallery/67aaef46d1859.jpg',
            'keterangan' => 'Kegiatan desa',
            'user_id' => 1
        ]);
    }
}
