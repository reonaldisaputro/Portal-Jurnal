<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosens = [
            ['name' => 'Dr. Ahmad'],
            ['name' => 'Prof. Budi'],
            ['name' => 'Dr. Chandra'],
            ['name' => 'Dr. Diana'],
            ['name' => 'Prof. Eko']
        ];

        DB::table('dosens')->insert($dosens);
    }
}
