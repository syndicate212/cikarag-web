<?php

namespace Database\Seeders;

use App\Models\Situs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SitusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         Situs::create([
            'logo'      => 'img-logo/logo_desa.png',
            'nm_desa'   => 'Desa Contoh',
            'kecamatan' => 'Kecamatan Contoh',
            'kabupaten' => 'Kabupaten Contoh',
            'provinsi'  => 'Jawa Barat',
            'kode_pos'  => 12345,
            'user_id'   => 1
        ]);
    }
}
