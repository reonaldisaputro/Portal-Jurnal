<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'author_id',
        'day_id',
        'waktu_penjemputan',
        'lokasi',
        'kendaraan'
    ];

    // Relasi dengan model Author
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    // Relasi dengan model Day (Hari)
    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id');
    }
}
