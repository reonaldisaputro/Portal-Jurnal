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
        // Validasi data input
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'nullable|string|unique:authors,slug',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'occupation' => 'nullable|string|max:255',
                'email' => 'required|email|unique:authors,email|unique:users,email', // Pastikan email unik di Author dan User
                'password' => 'required|string|min:6',
                'phone' => 'required|string|max:20',
                'angkatan' => 'nullable|string|max:50',
                'jurusan' => 'nullable|string|max:100',
                'instagram' => 'nullable|string|url',
                'facebook' => 'nullable|string|url',
                'youtube' => 'nullable|string|url',
                'linkedin' => 'nullable|string|url',
                'twitter' => 'nullable|string|url',
                'tiktok' => 'nullable|string|url',
                'status' => 'nullable|in:pending,accept,reject'
            ]);

            DB::beginTransaction();

            // Jika slug tidak disediakan, generate slug dari nama
            if (empty($validatedData['slug'])) {
                $validatedData['slug'] = Str::slug($validatedData['name']) . '-' . Str::random(6);
            }

            // Hash password sebelum menyimpannya ke database
            $validatedData['password'] = Hash::make($validatedData['password']);

            // Jika ada avatar, upload dan simpan path-nya
            if ($request->hasFile('avatar')) {
                $validatedData['avatar'] = $request->file('avatar')->store('avatars', 'public');
            }

            // Membuat Author baru
            $author = Author::create($validatedData);

            // Membuat User baru yang terkait dengan Author
            $user = User::create([
                'name' => $author->name,
                'email' => $author->email,
                'password' => $author->password, // Password sudah di-hash
                'author_id' => $author->id,
            ]);

            DB::commit();

            return view('author.info_email')->with('success', 'Registration successful!');
        } catch (ValidationException $e) {
            DB::rollBack();
            // Redirect ke halaman sebelumnya dengan pesan error validasi
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (Exception $e) {
            DB::rollBack();
            // Redirect ke halaman sebelumnya dengan pesan error lainnya
            return redirect()->back()->with('error', 'Failed to create author and user')->withInput();
        }
    }
}
