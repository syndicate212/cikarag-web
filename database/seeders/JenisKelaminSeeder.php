<?php

namespace Database\Seeders;

use App\Models\JenisKelamin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        JenisKelamin::insert([
            ['jenis_kelamin' => 'Laki-laki', 'jumlah' => 100, 'user_id' => 1],
            ['jenis_kelamin' => 'Perempuan', 'jumlah' => 120, 'user_id' => 1],
        ]);
    }
}
