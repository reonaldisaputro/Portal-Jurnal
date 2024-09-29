<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// Models
use App\Models\Author;

class AuthorAuthController extends Controller
{
    // login view
    public function login_page(){
        return view ('author.auth.login');
    }

    // signup view
    public function register_page(){
        return view ('author.auth.register');
    }


    // login process
    public function login_process(Request $request)
    {
        try {
            // Validasi data input
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string|min:8',
            ]);
        
            // Cek kredensial login untuk guard 'author'
            if (Auth::guard('author')->attempt(['email' => $request->email, 'password' => $request->password])) {
                // Login berhasil untuk author
                return redirect()->route('front.index')->with('success', 'Login successful!');
            }
    
            // Cek kredensial login untuk guard 'web'
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
                // Login berhasil untuk web user
                return redirect()->route('front.index')->with('success', 'Login successful!');
            }
    
            // Login gagal
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        } catch (\Exception $e) {
            // Tangani kesalahan
            return redirect()->back()->withInput()->with('error', 'An error occurred during login. Please try again.');
        }
    }    

    // register process
    public function register_process(Request $request){
        try {
            // Validasi data input
            $request->validate([
                'avatar' => 'required|image|max:2048|mimes:jpg,jpeg,png',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:authors',
                'occupation' => 'nullable|string|max:255',
                'phone' => 'required|string|max:255|regex:/^[0-9]{10,15}$/',
                'jurusan' => 'nullable|string|max:255',
                'angkatan' => 'nullable|integer',
                'instagram' => 'nullable|string|max:255',
                'facebook' => 'nullable|string|max:255',
                'youtube' => 'nullable|string|max:255',
                'tiktok' => 'nullable|string|max:255',
                'linkedin' => 'nullable|string|max:255',
                'twitter' => 'nullable|string|max:255',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Tambahkan pengecekan tambahan setelah validasi
            if ($request->password !== $request->password_confirmation) {
                return redirect()->back()->withInput()->with('error', 'Passwords do not match.');
            }
    
            // Handle file upload
            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
                $avatarFilename = basename($avatarPath);
            } else {
                // Ini tidak akan terjadi karena 'avatar' diatur sebagai required
                $avatarFilename = 'default-avatar.png';
            }
    
            // Membuat author baru
            $author = Author::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'occupation' => $request->occupation,
                'jurusan' => $request->jurusan,
                'angkatan' => $request->angkatan,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'youtube' => $request->youtube,
                'tiktok' => $request->tiktok,
                'linkedin' => $request->linkedin,
                'twitter' => $request->twitter,
                'password' => Hash::make($request->password),
                'slug' => Str::slug($request->name),
                'avatar' => $avatarFilename, // Menyimpan nama file avatar
            ]);
    
            // Redirect jika berhasil
            return redirect()->route('login')->with('success', 'Registration successful! Please login.');
        } catch (\Exception $e) {
            dd($e);
    
            // Redirect dengan pesan error jika terjadi kesalahan
            return redirect()->back()->withInput()->with('error', 'Registration failed! Please try again.');
        }
    }

    // logout
    public function logout() {
        // Mengeluarkan pengguna dari sesi
        Auth::guard('author')->logout();
    
        // Mengalihkan kembali ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}
