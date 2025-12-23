<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $this->call([
        UserSeeder::class,
        PostStatusSeeder::class,
        KategoriSeeder::class,
        AgamaSeeder::class,
        JenisKelaminSeeder::class,
        SitusSeeder::class,
        AnggaranSeeder::class,
        AnnouncementSeeder::class,
        GallerySeeder::class,
        KontakSeeder::class,
        LayananSeeder::class,
        PekerjaanSeeder::class,
        PerangkatDesaSeeder::class,
        PetaSeeder::class,
        SejarahSeeder::class,
        SliderSeeder::class,
        UmkmSeeder::class,
        VideoProfilSeeder::class,
        VisiMisiSeeder::class,
        WilayahSeeder::class,
        BeritaSeeder::class,
        CommentSeeder::class,
        CommentReplySeeder::class,
    ]);
    }
}
