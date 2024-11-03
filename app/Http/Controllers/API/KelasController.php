<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function index()
    {
        try {
            $kelas = Kelas::all();
            return ResponseFormatter::success($kelas, 'Data kelas retrieved successfully');
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve kelas', 500, $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $kelas = Kelas::find($id);
            if ($kelas) {
                return ResponseFormatter::success($kelas, 'Data kelas retrieved successfully');
            }
            return ResponseFormatter::error('Kelas not found', 404);
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve kelas', 500, $e->getMessage());
        }
    }
}
