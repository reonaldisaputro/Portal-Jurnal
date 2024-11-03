<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    // Fields yang dapat diisi (mass assignable)
    protected $fillable = [
        'day_id',
        'kelas_id',
        'mata_kuliah_id',
        'dosen_id',
        'ruang',
        'jam_mulai',
        'jam_selesai',
        'is_online',
        'color'
    ];

    // Relasi dengan model Day (Hari)
    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id');
    }

    // Relasi dengan model Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Relasi dengan model MataKuliah
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

    // Relasi dengan model Dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
