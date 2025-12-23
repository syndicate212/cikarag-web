<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ambil semua file di folder img-slider
        $files = Storage::disk('public')->files('img-slider');

        $data = [];

        foreach ($files as $file) {
            $data[] = [
                'judul'      => 'Selamat Datang',
                'deskripsi'  => 'Website Resmi Desa',
                'img_slider' => $file, // simpan path file
                'link_btn'   => '#',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Slider::insert($data);
    }
}
