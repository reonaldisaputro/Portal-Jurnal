@extends('front.master')
@section('content')

<body class="font-[Poppins]" style="background-image: url('{{ asset('assets/images/thumbnails/headers.png') }}')">
    <x-navbar/>
    <p class="text-white text-4xl font-bold mx-20 my-20">Dosen Kami</p>

    <div class="bg-white w-full h-max">
        <div class="container mx-auto flex flex-col items-center px-4 py-10">
            
            <div class="bg-white w-full">
                <div class="flex items-center gap-5">
                    <img src="./assets/images/photos/dosen.png" class="rounded-md" alt="dosen">
                    <div class="flex flex-col gap-3">
                        <h1 class="font-bold text-2xl">Syarif Hidayat.S.Ag</h1>
                        <p class="text-gray-300 font-bold">Agama Islam</p>
                    </div>
                </div>
                <p class="text-gray-400 my-5">Emmelie is a traditional book-worm and has always been from a young age. She is a housekeeper mom with two kids and she has a lot of time to read and relax.

                    Emmelie tends to casually browse books in a bookstore but she usually has a hard time finding the right one and spends a lot of time browsing.</p>
            </div>

            <div class="bg-white">
                <div class="container mx-auto">
    
                    <div class="flex flex-col lg:flex-row gap-7">
                        <div class="relative rounded-lg w-full h-[30rem]"
                        style="background-image: url('{{ asset('assets/images/thumbnails/headers.png') }}'); background-size: cover; background-position: center;">
                        <!-- Wrapper teks menggunakan positioning -->
                        <div class="absolute bottom-2 bg-white p-2 rounded-lg mx-3">
                            <p class="text-lg font-bold">Pentingnya Tauhid Dalam Kehidupan</p>
                            <p class="text-xs">Tauhid adalah makna Laa Ilaaha Illallah ini adalah bagian dari pembahasan
                                tabligh akbar berjudul Keesaan Allah Ta’ala yang disampaikan oleh Syaikh Prof. Dr. ‘Abdur Razzaq
                                bin ‘Abdil Muhsin Al-Badr.</p>
                            </div>
                        </div>
                    <div class="grid lg:grid-cols-2 gap-2">
                        <div class=" h-max mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="flex">
                                <!-- Gambar -->
                                <img class="w-32 object-cover rounded-l-lg"
                                src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                                <!-- Konten -->
                                <div class="p-4">
                                    <h2 class="text-lg font-semibold text-gray-800">5 Alasan Mengapa Anda Harus Menguasai
                                        Tauhid</h2>
                                    <p class="text-sm text-gray-600 mt-2">
                                        Jadi, Anda Akhirnya Pergi Ke Kelas Boxing Pertama Anda Dan Mempelajari Dasar-Dasar
                                        Olahraga Ini. Anda Juga Belajar Bahwa Disarankan Untuk Membungkus Tangan Sebelum
                                        Mengenakan Sarung...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=" h-max mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="flex">
                                <!-- Gambar -->
                                <img class="w-32 object-cover rounded-l-lg"
                                src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                                <!-- Konten -->
                                <div class="p-4">
                                    <h2 class="text-lg font-semibold text-gray-800">5 Alasan Mengapa Anda Harus Menguasai
                                        Tauhid</h2>
                                        <p class="text-sm text-gray-600 mt-2">
                                            Jadi, Anda Akhirnya Pergi Ke Kelas Boxing Pertama Anda Dan Mempelajari Dasar-Dasar
                                            Olahraga Ini. Anda Juga Belajar Bahwa Disarankan Untuk Membungkus Tangan Sebelum
                                            Mengenakan Sarung...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <div class=" h-max mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="flex">
                                <!-- Gambar -->
                                <img class="w-32 object-cover rounded-l-lg"
                                src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                                <!-- Konten -->
                                <div class="p-4">
                                    <h2 class="text-lg font-semibold text-gray-800">5 Alasan Mengapa Anda Harus Menguasai
                                        Tauhid</h2>
                                        <p class="text-sm text-gray-600 mt-2">
                                            Jadi, Anda Akhirnya Pergi Ke Kelas Boxing Pertama Anda Dan Mempelajari Dasar-Dasar
                                            Olahraga Ini. Anda Juga Belajar Bahwa Disarankan Untuk Membungkus Tangan Sebelum
                                            Mengenakan Sarung...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=" h-max mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="flex">
                                <!-- Gambar -->
                                <img class="w-32 object-cover rounded-l-lg"
                                src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                                <!-- Konten -->
                                <div class="p-4">
                                    <h2 class="text-lg font-semibold text-gray-800">5 Alasan Mengapa Anda Harus Menguasai
                                        Tauhid</h2>
                                        <p class="text-sm text-gray-600 mt-2">
                                            Jadi, Anda Akhirnya Pergi Ke Kelas Boxing Pertama Anda Dan Mempelajari Dasar-Dasar
                                        Olahraga Ini. Anda Juga Belajar Bahwa Disarankan Untuk Membungkus Tangan Sebelum
                                        Mengenakan Sarung...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    
            <div class="bg-white">
                <div class="flex justify-between items-center container mx-auto pt-10">
                    <p>Trendy Posts</p>
                    <a class="bg-[#F5F5F5] px-3 py-2 rounded-md">
                        <p>Show All</p>
                    </a>
                </div>
            </div>
    
            <div class="bg-white">
                <div class="container mx-auto">
    
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                        <div class="bg-white shadow-xl rounded-lg p-3">
                            <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}"
                            alt="Tauhid">
                        <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                        <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a
                            self-driving car in one month?</p>
                        <div class="flex items-center justify-between bg-[#F5F5F5] rounded-lg p-2">
                            <div class="flex items-center gap-4">
                                
                                <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-12">
                                <div>
                                    <p>Aisha Rahman</p>
                                    <p class="text-[#3E3232BF] text-xs">20 Agustus 2023</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/book.png') }}" alt="">
                        </div>
                    </div>
                    <div class="bg-white shadow-xl rounded-lg p-3">
                        <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}"
                        alt="Tauhid">
                        <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                        <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a
                            self-driving car in one month?</p>
                            <div class="flex items-center justify-between bg-[#F5F5F5] rounded-lg p-2">
                                <div class="flex items-center gap-4">
    
                                    <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-12">
                                    <div>
                                        <p>Aisha Rahman</p>
                                        <p class="text-[#3E3232BF] text-xs">20 Agustus 2023</p>
                                    </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/book.png') }}" alt="">
                        </div>
                    </div>
                    <div class="bg-white shadow-xl rounded-lg p-3">
                        <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}"
                        alt="Tauhid">
                        <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                        <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a
                            self-driving car in one month?</p>
                            <div class="flex items-center justify-between bg-[#F5F5F5] rounded-lg p-2">
                                <div class="flex items-center gap-4">
                                    
                                    <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-12">
                                    <div>
                                    <p>Aisha Rahman</p>
                                    <p class="text-[#3E3232BF] text-xs">20 Agustus 2023</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/book.png') }}" alt="">
                        </div>
                    </div>
                    <div class="bg-white shadow-xl rounded-lg p-3">
                        <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}"
                        alt="Tauhid">
                        <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                        <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a
                            self-driving car in one month?</p>
                            <div class="flex items-center justify-between bg-[#F5F5F5] rounded-lg p-2">
                            <div class="flex items-center gap-4">
                                
                                <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-12">
                                <div>
                                    <p>Aisha Rahman</p>
                                    <p class="text-[#3E3232BF] text-xs">20 Agustus 2023</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/book.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>
</body>

@endsection
@push('after-styles')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
@endpush
@push('after-scripts')
    <script src="{{ asset('customjs/two-lines-text.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('customjs/carousel.js') }}"></script>
@endpush