<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Agama::insert([
            ['agama' => 'Islam', 'penganut' => 0, 'user_id' => 1],
            ['agama' => 'Kristen', 'penganut' => 0, 'user_id' => 1],
        ]);
    }
}
