<?php

namespace Database\Seeders;

use App\Models\Sejarah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Sejarah::create([
            'judul' => 'Sejarah Desa',
            'body' => 'Sejarah singkat berdirinya desa',
            'user_id' => 1
        ]); 
    }
}
