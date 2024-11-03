<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }

        .card .card-icon {
            font-size: 50px;
            color: #28a745;
        }

        .btn-check-email {
            background-color: #007bff;
            color: #fff;
        }

        .btn-check-email:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="card text-center">
        <div class="card-body">
            <div class="card-icon mb-3">
                <i class="bi bi-check-circle-fill"></i>
            </div>
            <h3 class="card-title text-success">Registrasi Berhasil!</h3>
            <p class="card-text text-muted">
                Terima kasih telah mendaftar! Kami sedang meninjau pendaftaran Anda.
                <br> Silakan cek email secara berkala, karena akun anda akan di terima atau di tolak.
            </p>
            {{-- <a href="https://mail.google.com/" target="_blank" class="btn btn-check-email btn-lg rounded-pill mt-3">Cek
                Email Sekarang</a> --}}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
