<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DayController;
use App\Http\Controllers\API\DosenController;
use App\Http\Controllers\API\KelasController;
use App\Http\Controllers\API\JadwalController;
use App\Http\Controllers\API\MataKuliahController;
use App\Http\Controllers\API\TransportationController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::middleware('with_fast_api_key')->group(function () {
    Route::get('/day', [DayController::class, 'index']);
    Route::get('/day/{id}', [DayController::class, 'show']);

    Route::get('/dosen', [DosenController::class, 'index']);
    Route::get('/dosen/{id}', [DosenController::class, 'show']);

    Route::get('/kelas', [KelasController::class, 'index']);
    Route::get('/kelas/{id}', [KelasController::class, 'show']);

    Route::get('/mata-kuliah', [MataKuliahController::class, 'index']);
    Route::get('/mata-kuliah/{id}', [MataKuliahController::class, 'show']);

    Route::get('jadwals', [JadwalController::class, 'index']);
    Route::get('jadwals/{id}', [JadwalController::class, 'show']);

    Route::get('transportations', [TransportationController::class, 'index']);
    Route::get('transportations/{id}', [TransportationController::class, 'show']);
});
