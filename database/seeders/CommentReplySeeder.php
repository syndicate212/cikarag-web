<?php

namespace Database\Seeders;

use App\Models\CommentReply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         CommentReply::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'body' => 'Terima kasih',
            'comment_id' => 1,
            'user_id' => 1
        ]);
    }
}
