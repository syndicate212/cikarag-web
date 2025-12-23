<?php

namespace Database\Seeders;

use App\Models\Pekerjaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Pekerjaan::insert([
            ['pekerjaan' => 'Petani', 'jumlah' => 120, 'user_id' => 1],
            ['pekerjaan' => 'Pedagang', 'jumlah' => 80, 'user_id' => 1],
        ]);
    }
}
