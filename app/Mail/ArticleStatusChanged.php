<?php

namespace App\Mail;

use App\Models\ArticleNews;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticleStatusChanged extends Mailable
{
    use Queueable, SerializesModels;

    public $article; // ✅ Tambahkan property untuk menyimpan data artikel

    /**
     * Create a new message instance.
     */
    public function __construct(ArticleNews $article)
    {
        $this->article = $article; // ✅ Simpan data artikel
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Article Status Changed',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.articles.status',
            with: ['article' => $this->article] // ✅ Kirim data ke view
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
