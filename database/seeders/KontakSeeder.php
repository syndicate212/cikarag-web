<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kontak::create([
            'lokasi' => 'Jl. Raya Desa No.1',
            'email' => 'desa@email.com',
            'no_hp' => '081234567890',
            'user_id' => 1
        ]);
    }
}
