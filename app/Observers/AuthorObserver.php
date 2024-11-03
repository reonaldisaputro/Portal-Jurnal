<?php

namespace App\Observers;

use App\Models\Author;
use App\Mail\StatusAuthor;
use Illuminate\Support\Facades\Mail;

class AuthorObserver
{
    /**
     * Handle the Author "created" event.
     */
    public function created(Author $author): void
    {
        //
    }

    /**
     * Handle the Author "updated" event.
     */
    public function updated(Author $author): void
    {
        if ($author->isDirty('status')) { // Mengecek apakah status berubah
            // Kirim email notifikasi ke owner
            Mail::to($author->email)->send(new StatusAuthor($author));
        }
    }

    /**
     * Handle the Author "deleted" event.
     */
    public function deleted(Author $author): void
    {
        //
    }

    /**
     * Handle the Author "restored" event.
     */
    public function restored(Author $author): void
    {
        //
    }

    /**
     * Handle the Author "force deleted" event.
     */
    public function forceDeleted(Author $author): void
    {
        //
    }
}
