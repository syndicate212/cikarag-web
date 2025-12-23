<?php

namespace Database\Seeders;

use App\Models\Wilayah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Wilayah::create([
            'judul' => 'Wilayah Administratif',
            'body' => 'Deskripsi wilayah desa',
            'user_id' => 1
        ]);
    }
}
