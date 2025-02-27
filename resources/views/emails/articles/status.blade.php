@component('mail::message')
# Perubahan Status Artikel

Halo {{ $article->author->name ?? 'Penulis' }},

Status artikel Anda dengan judul **{{ $article->name }}** telah berubah menjadi **{{ $article->status }}**.

Terima kasih atas kontribusi Anda!

Hormat kami,<br>
{{ config('app.name') }}
@endcomponent
