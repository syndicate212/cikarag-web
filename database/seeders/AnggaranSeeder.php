<?php

namespace Database\Seeders;

use App\Models\Anggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Anggaran::create([
            'judul' => 'APBDes 2025',
            'slug' => 'apbdes-2025',
            'keterangan' => 'Anggaran Pendapatan dan Belanja Desa',
            'gambar' => 'img-anggaran/67aaf2a551c24.png',
            'user_id' => 1
        ]);
    }
}
