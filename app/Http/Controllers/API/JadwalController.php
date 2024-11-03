<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;


class JadwalController extends Controller
{
    // Fungsi index untuk mengambil semua data jadwal
    public function index()
    {
        try {
            // Mengambil semua data jadwal dengan relasi hari, kelas, mata kuliah, dan dosen
            $jadwals = Jadwal::with(['day', 'kelas', 'mataKuliah', 'dosen'])->get();

            // Mengembalikan respon sukses dengan data jadwal
            return ResponseFormatter::success($jadwals, 'Data jadwals retrieved successfully');
        } catch (Exception $e) {
            // Mengembalikan respon error jika terjadi kesalahan
            return ResponseFormatter::error('Failed to retrieve jadwals', 500, $e->getMessage());
        }
    }

    // Fungsi show untuk mengambil data jadwal berdasarkan ID
    public function show($id)
    {
        try {
            // Mencari jadwal berdasarkan ID dengan relasi
            $jadwal = Jadwal::with(['day', 'kelas', 'mataKuliah', 'dosen'])->find($id);

            // Jika jadwal ditemukan, kembalikan respon sukses
            if ($jadwal) {
                return ResponseFormatter::success($jadwal, 'Data jadwal retrieved successfully');
            }

            // Jika tidak ditemukan, kembalikan respon error 404
            return ResponseFormatter::error('Jadwal not found', 404);
        } catch (Exception $e) {
            // Mengembalikan respon error jika terjadi kesalahan
            return ResponseFormatter::error('Failed to retrieve jadwal', 500, $e->getMessage());
        }
    }
}
