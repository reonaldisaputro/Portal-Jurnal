<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jadwals = [
            [
                'day_id' => 1, // Senin
                'kelas_id' => 1,
                'mata_kuliah_id' => 1,
                'dosen_id' => 1,
                'ruang' => 'A1',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00',
                'link_zoom' => 'http://zoom.us/j/1234567890',
                'is_online' => true,
                'color' => '#FF6347'
            ],
            [
                'day_id' => 2, // Selasa
                'kelas_id' => 2,
                'mata_kuliah_id' => 2,
                'dosen_id' => 2,
                'ruang' => 'B1',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '11:00:00',
                'link_zoom' => null,
                'is_online' => false,
                'color' => '#4682B4'
            ],
            // Tambahkan jadwal lainnya di sini
        ];

        DB::table('jadwals')->insert($jadwals);
    }
}
