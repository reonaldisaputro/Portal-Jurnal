<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthorController extends Controller
{
    public function store(Request $request)
    {
        try {
            // ✅ Validasi data input termasuk konfirmasi password
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'nullable|string|unique:authors,slug',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'occupation' => 'nullable|string|max:255',
                'email' => 'required|email|unique:users,email', // Cukup di tabel users
                'password' => 'required|string|min:6|confirmed', // ✅ Konfirmasi password
                'phone' => 'required|string|max:20',
                'angkatan' => 'nullable|string|max:50',
                'jurusan' => 'nullable|string|max:100',
                'instagram' => 'nullable|url',
                'facebook' => 'nullable|url',
                'youtube' => 'nullable|url',
                'linkedin' => 'nullable|url',
                'twitter' => 'nullable|url',
                'tiktok' => 'nullable|url',
                'status' => 'nullable|in:pending,accept,reject',
            ]);

            DB::beginTransaction();

            // ✅ Generate slug dari nama jika tidak diinputkan
            $validatedData['slug'] = $validatedData['slug'] ?? Str::slug($validatedData['name']) . '-' . Str::random(6);

            // ✅ Hash password sebelum menyimpannya ke database
            $validatedData['password'] = Hash::make($validatedData['password']);

            // ✅ Jika ada avatar, upload dan simpan path-nya
            $validatedData['avatar'] = $this->uploadAvatar($request);

            // ✅ Membuat Author baru
            $author = Author::create($validatedData);

            // ✅ Membuat User baru yang terkait dengan Author
            $this->createUserFromAuthor($author);

            DB::commit();

            return view('author.info_email')->with('success', 'Registration successful!');
        } catch (ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to create author and user. ' . $e->getMessage())->withInput();
        }
    }

    /**
     * ✅ Upload avatar jika ada
     */
    private function uploadAvatar(Request $request)
    {
        return $request->hasFile('avatar') 
            ? $request->file('avatar')->store('avatars', 'public') 
            : null;
    }

    /**
     * ✅ Membuat user berdasarkan data author
     */
    private function createUserFromAuthor(Author $author)
    {
        return User::create([
            'name' => $author->name,
            'email' => $author->email,
            'password' => $author->password, // Password sudah di-hash
            'author_id' => $author->id,
        ]);
    }
}
