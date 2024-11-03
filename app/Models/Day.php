<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }

    public function transportation()
    {
        return $this->hasMany(Transportation::class);
    }
}
