@extends('front.master')
@section('content')

    <body class="font-[Poppins]" style="background-image: url('{{ asset('assets/images/thumbnails/headers.png') }}')">
        <x-navbar />

        <div class="flex mt-10 lg:mt-0 flex-col lg:flex-row gap-5 items-center max-w-[1050px] mx-auto container">
            <div>
                <p class="text-white font-bold text-5xl">Pendidikan Kader Ulama</p>
                <p class="text-white font-extralight">Pendidikan Kader Ulama (PKU) Istiqlal adalah program pendidikan yang
                    bertujuan untuk melahirkan calon ulama berkualitas dengan kurikulum yang terintegrasi dan inovatif.
                    Program ini memberikan kesempatan untuk belajar dari para pengajar berpengalaman, menawarkan beasiswa
                    S-2, serta membangun jaringan alumni yang solid.</p>
            </div>
            <img src="{{ asset('assets/images/photos/photos-headers.png') }}" alt="" class="w-[25rem] mr-20">
        </div>
        <div
            class="grid grid-cols-1 container mx-auto lg:grid-cols-4 bg-white rounded-tr-xl rounded-tl-xl lg:rounded-xl gap-4 lg:place-items-center px-10 mx-auto max-w-[1050px] py-3 shadow-lg">
            <div class="font-semibold ">
                <p class="text-2xl">Pendidikan Kader</p>
                <p class="text-2xl">Ulama Masjid Istiqlal</p>
            </div>
            <div class="">
                <p class="font-semibold text-2xl">107</p>
                <p>Mahasiswa Aktif</p>
            </div>
            <div class="">
                <p class="font-semibold text-2xl">12</p>
                <p>Dosen Berpengalaman</p>
            </div>
            <img class="" src="{{ asset('assets/images/photos/pku.png') }}" alt="">
        </div>

        <!-- <div class="bg-white pt-20">
            <div class="container mx-auto">

                <div
                class="flex items-center justify-center gap-4 sm:gap-10 bg-[#F5F5F5] py-3 rounded-xl flex-wrap">
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
            </div>
        </div> -->
        </div>

        <div class="bg-white pt-20">
            <div class="flex justify-between items-center container mx-auto">
                <p>New Posts</p>
                <!-- <a class="bg-[#F5F5F5] px-3 py-2 rounded-md">
                    <p>Show All</p>
                </a> -->
            </div>
        </div>

        <div class="bg-white">
            <div class="container mx-auto flex flex-col items-center">

                <p class="text-4xl font-bold text-[#007AFF] mb-7">Berita Terbaru</p>
                <div class="">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-4 gap-8">
                        @foreach ($articles as $article)
                            <a class="relative bg-[#007AFF] rounded-lg" href="{{ route('front.details', $article->slug) }}">
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->name }}">
                                <p class="absolute right-0 top-0 bg-white mx-2 my-2 px-2 py-1 rounded-lg">{{ $article->category->name ?? 'Uncategorized' }}</p>
                                <p class="text-white pl-5 py-2">{{ $article->name }}</p>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="#007AFF" />
                                    <path
                                        d="M15 22.75C14.3096 22.75 13.75 23.3096 13.75 24C13.75 24.6904 14.3096 25.25 15 25.25V22.75ZM33.8839 24.8839C34.372 24.3957 34.372 23.6043 33.8839 23.1161L25.9289 15.1612C25.4408 14.673 24.6493 14.673 24.1612 15.1612C23.673 15.6493 23.673 16.4408 24.1612 16.9289L31.2322 24L24.1612 31.0711C23.673 31.5592 23.673 32.3507 24.1612 32.8388C24.6493 33.327 25.4408 33.327 25.9289 32.8388L33.8839 24.8839ZM15 25.25H33V22.75H15V25.25Z"
                                        fill="white" />
                                </svg>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white pt-20">
            <div class="h-max pb-4">
                <div class="flex justify-between items-center container mx-auto">
                    <p>Artikel Baru</p>
                    <!-- <a class="bg-[#F5F5F5] px-3 py-2 rounded-md">
                        <p>Show All</p>
                    </a> -->
                </div>
            </div>
            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-3">

                <div class="bg-white shadow-xl w-full rounded-lg flex lg:flex-row flex-col gap-3 p-3">
                    <img src="{{ asset('assets/images/thumbnails/artikel-news.png') }}" alt=""
                        class="rounded-lg">
                    <div>
                        <p class="font-semibold">12 Tren Desain Islam untuk 2023</p>
                        <p class="text-xs font-thin py-7 text-[#3E3232BF]">Dunia seni dan desain Islam berkembang dengan
                            cepat. Untuk berkembang di bidang ini, desainer harus mengantisipasi tantangan baru dan
                            merangkul keindahan tradisi.</p>
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
                <div class="bg-white shadow-xl w-full rounded-lg flex lg:flex-row flex-col gap-3 p-3">
                    <img src="{{ asset('assets/images/thumbnails/artikel-news.png') }}" alt=""
                        class="rounded-lg">
                    <div>
                        <p class="font-semibold">12 Tren Desain Islam untuk 2023</p>
                        <p class="text-xs font-thin py-7 text-[#3E3232BF]">Dunia seni dan desain Islam berkembang dengan
                            cepat. Untuk berkembang di bidang ini, desainer harus mengantisipasi tantangan baru dan
                            merangkul keindahan tradisi.</p>
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
                <div class="bg-white shadow-xl w-full rounded-lg flex lg:flex-row flex-col gap-3 p-3">
                    <img src="{{ asset('assets/images/thumbnails/artikel-news.png') }}" alt=""
                        class="rounded-lg">
                    <div class="">
                        <p class="font-semibold">12 Tren Desain Islam untuk 2023</p>
                        <p class="text-xs font-thin py-7 text-[#3E3232BF]">Dunia seni dan desain Islam berkembang dengan
                            cepat. Untuk berkembang di bidang ini, desainer harus mengantisipasi tantangan baru dan
                            merangkul keindahan tradisi.</p>
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

        <div class="bg-white pt-20 pb-4">
            <div class="flex justify-between items-center container mx-auto pt-10">
                <p>Video Terbaru</p>
                <a class="bg-[#F5F5F5] px-3 py-2 rounded-md">
                    <p>Show All</p>
                </a>
            </div>
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
        
        
        <x-footer></x-footer>
    </body>
@endsection

@push('after-scripts')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush
