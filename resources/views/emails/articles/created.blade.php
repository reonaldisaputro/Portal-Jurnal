@component('mail::message')
# Artikel Baru Telah Dibuat

Halo Admin,

Mahasiswa ({{ $article->author->name ?? 'Tanpa Penulis' }}) telah membuat artikel baru dengan judul:
**{{ $article->name }}**.

Silakan tinjau dan lakukan review di sistem Filament.

Terima kasih,
{{ config('app.name') }}
@endcomponent
