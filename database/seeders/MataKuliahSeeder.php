<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mata_kuliahs = [
            ['name' => 'Multimedia', 'category' => 'Teknologi'],
            ['name' => 'Bahasa Arab', 'category' => 'Bahasa'],
            ['name' => 'Ekonomi', 'category' => 'Sosial'],
            ['name' => 'Agama', 'category' => 'Religi'],
            ['name' => 'Matematika', 'category' => 'Sains']
        ];

        DB::table('mata_kuliahs')->insert($mata_kuliahs);
    }
}
