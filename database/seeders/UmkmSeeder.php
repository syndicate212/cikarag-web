<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Umkm::create([
            'foto' => 'img-produk/67aaeaf668166.jpeg',
            'produk' => 'Keripik Singkong',
            'slug' => 'keripik-singkong',
            'harga' => 15000,
            'deskripsi' => 'Keripik khas desa',
            'no_hp' => '081234567890',
            'user_id' => 1
        ]);
    }
}
