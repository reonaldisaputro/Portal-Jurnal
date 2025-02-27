<?php

namespace App\Observers;

use App\Models\User;
use App\Models\ArticleNews;
use App\Mail\NewArticleCreated;
use App\Mail\ArticleStatusChanged;
use Illuminate\Support\Facades\Mail;

class ArticleNewsObserver
{
    /**
     * Event ketika record "dibuat" (create).
     */


    // public function created(ArticleNews $article)
    // {
    //     // 1. Tentukan email admin (bisa dari .env, config, atau hardcode)
    //     $adminEmail = config('mail.admin_email'); // misalnya di .env

    //     // 2. Kirim email ke admin
    //     if ($adminEmail) {
    //         Mail::to($adminEmail)->send(new NewArticleCreated($article));
    //     }
    // }

    public function created(ArticleNews $article)
    {
        // Kirim email ke admin saat mahasiswa membuat artikel
        $adminEmails = User::whereHas('roles', function ($query) {
            $query->where('name', 'super_admin');
        })->pluck('email');

        Mail::to($adminEmails)->send(new NewArticleCreated($article));
    }


    /**
     * Event ketika record "diupdate" (edit).
     */
    public function updated(ArticleNews $article)
    {
        // Cek apakah field "status" berubah
        if ($article->isDirty('status')) {
            // 1. Dapatkan email mahasiswa (penulis)
            $authorEmail = optional($article->author)->email; 
            // author() adalah relasi di model ArticleNews

            // 2. Kirim email ke mahasiswa jika ada email valid
            if ($authorEmail) {
                Mail::to($authorEmail)->send(new ArticleStatusChanged($article));
            }
        }
    }
}
