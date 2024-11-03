<?php

namespace App\Http\Controllers\API;

use Exception;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        try {
            $mataKuliahs = MataKuliah::all();
            return ResponseFormatter::success($mataKuliahs, 'Data mata kuliah retrieved successfully');
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve mata kuliah', 500, $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $mataKuliah = MataKuliah::find($id);
            if ($mataKuliah) {
                return ResponseFormatter::success($mataKuliah, 'Data mata kuliah retrieved successfully');
            }
            return ResponseFormatter::error('mata kuliah not found', 404);
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve mata kuliah', 500, $e->getMessage());
        }
    }
}
