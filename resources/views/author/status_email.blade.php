<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Diperbarui</title>
</head>

<body>
    <h1>Status Diperbarui</h1>
    <p>Halo, {{ $author->name }}</p>
    <p>Status akun Anda telah berubah menjadi: <strong>{{ $author->status }}</strong>.</p>

    @if ($author->status === 'accept')
        <p>Anda sekarang dapat login ke dashboard admin kami. Silakan klik link berikut untuk login:</p>
        <p><a href="{{ env('APP_URL') }}/admin/login" target="_blank">{{ env('APP_URL') }}/admin/login</a></p>
    @endif

    <p>Terima kasih telah menggunakan layanan kami.</p>
</body>

</html>
