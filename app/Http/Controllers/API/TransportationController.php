<?php

namespace App\Http\Controllers\API;

use Exception;
use Illuminate\Http\Request;
use App\Models\Transportation;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TransportationController extends Controller
{
    // Fungsi index untuk mengambil semua data transportasi
    public function index()
    {
        try {
            // Mengambil semua data transportasi dengan relasi hari dan author (jika ada)
            $transportations = Transportation::with(['day', 'author'])->get();

            // Mengembalikan respon sukses dengan data transportasi
            return ResponseFormatter::success($transportations, 'Data transportations retrieved successfully');
        } catch (Exception $e) {
            // Mengembalikan respon error jika terjadi kesalahan
            return ResponseFormatter::error('Failed to retrieve transportations', 500, $e->getMessage());
        }
    }

    // Fungsi show untuk mengambil data transportasi berdasarkan ID
    public function show($id)
    {
        try {
            // Mencari transportasi berdasarkan ID dengan relasi
            $transportation = Transportation::with(['day', 'author'])->find($id);

            // Jika transportasi ditemukan, kembalikan respon sukses
            if ($transportation) {
                return ResponseFormatter::success($transportation, 'Data transportation retrieved successfully');
            }

            // Jika tidak ditemukan, kembalikan respon error 404
            return ResponseFormatter::error('Transportation not found', 404);
        } catch (Exception $e) {
            // Mengembalikan respon error jika terjadi kesalahan
            return ResponseFormatter::error('Failed to retrieve transportation', 500, $e->getMessage());
        }
    }
}
