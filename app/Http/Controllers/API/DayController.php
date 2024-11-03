<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Day;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class DayController extends Controller
{
    // Get all days
    public function index()
    {
        try {
            $days = Day::all();
            return ResponseFormatter::success($days, 'Data days retrieved successfully');
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve days', 500, $e->getMessage());
        }
    }

    // Get specific day by ID
    public function show($id)
    {
        try {
            $day = Day::find($id);
            if ($day) {
                return ResponseFormatter::success($day, 'Data day retrieved successfully');
            }
            return ResponseFormatter::error('Day not found', 404);
        } catch (Exception $e) {
            return ResponseFormatter::error('Failed to retrieve day', 500, $e->getMessage());
        }
    }
}
