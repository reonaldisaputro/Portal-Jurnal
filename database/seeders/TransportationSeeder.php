<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transportations = [
            [
                'author_id' => 1,
                'day_id' => 1, // Senin
                'waktu_penjemputan' => '07:00:00',
                'lokasi' => 'Asrama 1 - Masjid Istiqlal',
                'kendaraan' => 'Mobil 1'
            ],
            // Tambahkan data transportasi lainnya di sini
        ];

        DB::table('transportations')->insert($transportations);
    }
}
