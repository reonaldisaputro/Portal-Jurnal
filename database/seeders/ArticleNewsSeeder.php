<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_news')->insert([
            [
                'name' => 'Artikel Pertama PKUMI',
                'content' => 'Konten artikel pertama PKUMI yang sangat informatif dan mendalam mengenai program-program terbaru.',
                'thumbnail' => 'assets/images/thumbnails/th-building.png',
                'is_featured' => 'featured',
                'category_id' => 1, // Pastikan category_id dan author_id valid
                'author_id' => 1,
                'slug' => Str::slug('Artikel Pertama PKUMI'),
                'view' => 100,
                'link_pdf' => 'link-to-pdf/article1.pdf',
                'status' => 'accept',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Update Kegiatan PKUMI',
                'content' => 'Informasi terkini mengenai kegiatan PKUMI yang akan berlangsung dalam waktu dekat.',
                'thumbnail' => 'assets/images/thumbnails/th-bulldozer.png',
                'is_featured' => 'featured',
                'category_id' => 2,
                'author_id' => 1,
                'slug' => Str::slug('Update Kegiatan PKUMI'),
                'view' => 150,
                'link_pdf' => 'link-to-pdf/article2.pdf',
                'status' => 'accept',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beasiswa S2 PKUMI',
                'content' => 'Informasi tentang beasiswa S2 yang diberikan oleh PKUMI untuk mahasiswa berprestasi.',
                'thumbnail' => 'assets/images/thumbnails/th-cyclist.png',
                'is_featured' => 'featured',
                'category_id' => 3,
                'author_id' => 1,
                'slug' => Str::slug('Beasiswa S2 PKUMI'),
                'view' => 200,
                'link_pdf' => 'link-to-pdf/article3.pdf',
                'status' => 'accept',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}