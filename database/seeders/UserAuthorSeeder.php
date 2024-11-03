<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat author terlebih dahulu
        $author = Author::create([
            'name' => 'John Doe',
            'slug' => Str::slug('John Doe'),
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'),
            'phone' => '123456789',
            'angkatan' => '2020',
            'jurusan' => 'Teknik Informatika',
            'instagram' => 'https://instagram.com/johndoe',
            'facebook' => 'https://facebook.com/johndoe',
            'youtube' => 'https://youtube.com/johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'twitter' => 'https://twitter.com/johndoe',
            'tiktok' => 'https://tiktok.com/@johndoe',
            'avatar' => 'path/to/avatar.jpg',
            'occupation' => 'Software Developer',
        ]);

        // Membuat user dengan relasi ke author yang baru saja dibuat
        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'author_id' => $author->id,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
