<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'color'

    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
