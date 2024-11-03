<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            ['name' => 'S2 PKU SM1 A'],
            ['name' => 'S2 PKU SM1 B'],
            ['name' => 'S2 PKU SM2 A'],
            ['name' => 'S2 PKU SM2 B']
        ];

        DB::table('kelas')->insert($kelas);
    }
}
