<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kategori::insert([
            ['kategori' => 'Teknologi', 'slug' => 'teknologi', 'user_id' => 1],
            ['kategori' => 'UMKM', 'slug' => 'umkm', 'user_id' => 1],
        ]);
    }
}
