<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Registrasi Mahasiswa</h1>

        <!-- Pesan error umum -->
        @if(session('error'))
            <div class="mb-4 p-3 bg-red-200 text-red-700 rounded">
                {{ session('error') }}
            </div>
        @endif

        <!-- Form Registrasi -->
        <form action="{{ route('author.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                <input type="text" name="name" id="name"
                    class="border rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" id="email"
                    class="border rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password & Konfirmasi Password -->
            <div class="mb-4 relative">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" name="password" id="password"
                    class="border rounded-lg w-full py-2 px-3 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                <span class="absolute right-3 top-9 cursor-pointer" onclick="togglePassword('password')">
                    👁️
                </span>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 relative">
                <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="border rounded-lg w-full py-2 px-3 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                <span class="absolute right-3 top-9 cursor-pointer" onclick="togglePassword('password_confirmation')">
                    👁️
                </span>
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Nomor Telepon</label>
                <input type="text" name="phone" id="phone"
                    class="border rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('phone') }}" required>
                @error('phone')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Pekerjaan -->
            <div class="mb-4">
                <label for="occupation" class="block text-gray-700 font-bold mb-2">Pekerjaan</label>
                <input type="text" name="occupation" id="occupation"
                    class="border rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('occupation') }}">
            </div>

            <!-- Avatar Upload -->
            <div class="mb-4">
                <label for="avatar" class="block text-gray-700 font-bold mb-2">Foto Profil</label>
                <input type="file" name="avatar" id="avatar"
                    class="border rounded-lg w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('avatar')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-bold hover:bg-blue-700 transition duration-200">
                    Daftar
                </button>
            </div>
        </form>
    </div>

    <!-- JavaScript untuk Toggle Password -->
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
    </script>

</body>
</html>
