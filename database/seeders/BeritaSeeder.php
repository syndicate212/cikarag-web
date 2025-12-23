<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Berita::create([
            'judul' => 'Contoh Berita',
            'slug' => 'contoh-berita',
            'excerpt' => 'Ini contoh berita',
            'body' => 'Isi berita lengkap',
            'gambar' => 'img-berita/67aae89f0d739.jpg',
            'views' => 0,
            'user_id' => 1,
            'status_id' => 2,
            'kategori_id' => 1,
        ]);
    }
}
