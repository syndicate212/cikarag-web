<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Comment::create([
            'nama' => 'Pengunjung',
            'email' => 'test@mail.com',
            'body' => 'Komentar pertama',
            'berita_id' => 1
        ]);
    }
}
