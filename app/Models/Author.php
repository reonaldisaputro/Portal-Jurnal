<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Ganti model dasar
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Author extends Authenticatable // Ubah dari Model menjadi Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'occupation',
        'avatar',
        'slug',
        'email',
        'phone',
        'password',
        'jurusan',
        'angkatan',
        'instagram',
        'facebook',
        'youtube',
        'tiktok',
        'linkedin',
        'twitter',
    ];

    protected $hidden = [
        'password', // Sembunyikan password dari hasil serialisasi
        'remember_token',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function news()
    {
        return $this->hasMany(ArticleNews::class);
    }
}
