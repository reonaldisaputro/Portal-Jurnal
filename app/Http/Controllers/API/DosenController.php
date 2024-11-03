<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function index()
    {
        try {
            $dosens = Dosen::all();
            return ResponseFormatter::success($dosens, 'Data dosens retrieved successfully');
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve dosens', 500, $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $dosen = Dosen::find($id);
            if ($dosen) {
                return ResponseFormatter::success($dosen, 'Data dosen retrieved successfully');
            }
            return ResponseFormatter::error('Dosen not found', 404);
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve dosen', 500, $e->getMessage());
        }
    }
}
