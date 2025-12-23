<?php

namespace Database\Seeders;

use App\Models\Peta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Peta::create([
            'judul' => 'Peta Wilayah Desa',
            'alamat' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63301.3408179137!2d107.41615960415929!3d-7.42826360099633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6882a04a7a1b03%3A0xc32eaa4e2b1cca18!2sCikarang%2C%20Cisewu%2C%20Garut%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1765903654147!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'user_id' => 1
        ]);
    }
}
