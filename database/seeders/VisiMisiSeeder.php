<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        VisiMisi::create([
            'visi' => 'Mewujudkan desa mandiri',
            'misi' => 'Meningkatkan kesejahteraan masyarakat',
            'user_id' => 1
        ]);
    }
}
