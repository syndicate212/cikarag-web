<?php

namespace Database\Seeders;

use App\Models\PerangkatDesa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         PerangkatDesa::create([
            'nama' => 'Budi Santoso',
            'foto' => 'img-perangkat/68e32680b0f92.png',
            'jabatan' => 'Kepala Desa',
            'user_id' => 1
        ]);
    }
}
