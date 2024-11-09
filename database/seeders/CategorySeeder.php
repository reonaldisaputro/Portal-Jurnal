<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Tasawuf',
                'icon' => 'fa-plane',  // Icon contoh, bisa disesuaikan
                'slug' => Str::slug('Tasawuf'),
            ],
            [
                'name' => 'Aqidah',
                'icon' => 'fa-book',
                'slug' => Str::slug('Aqidah'),
            ],
            [
                'name' => 'Tafsir',
                'icon' => 'fa-coffee',
                'slug' => Str::slug('Tafsir'),
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
