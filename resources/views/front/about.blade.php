@extends('front.master')
@section('content')

    <body class="font-[Poppins]" style="background-image: url('{{ asset('assets/images/thumbnails/headers.png') }}')">
        <x-navbar/>

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
        <div class="bg-white pt-20">
            <div class="container mx-auto">

                <div
                class="flex items-center justify-center gap-4 sm:gap-10 bg-[#F5F5F5] py-3 rounded-xl flex-wrap">
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
                <a class="text-white bg-[#2563EB] px-5 py-2 rounded-xl" href="">Akidah</a>
            </div>
        </div>
        </div>
        <div class="bg-white pt-20">
            <div class="container mx-auto">

                <div class="bg-[#F5F5F5] flex p-5 rounded-lg gap-5">
                    <div class="w-1/2">
                        <p class="text-2xl font-semibold mb-7">We pay attention to your needs and do the best design.</p>
                        <p class="text-[#3E3232] text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum dolorum rem expedita, hic ea accusamus, cumque vero cum distinctio accusantium aliquam maiores illum ipsa. Corrupti cumque beatae magni repellendus accusamus!</p>
                    </div>
                    <img src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="" class="w-1/2 rounded-lg">
                </div>
            </div>
        </div>
        
        <div class="bg-white pt-20">
            <div class="container mx-auto">

                <div class="bg-[#F5F5F5] flex p-5 rounded-lg gap-5">
                    <img src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="" class="w-1/2 rounded-lg">
                    <div class="w-1/2">
                        <p class="text-2xl font-semibold mb-7">We pay attention to your needs and do the best design.</p>
                        <p class="text-[#3E3232] text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum dolorum rem expedita, hic ea accusamus, cumque vero cum distinctio accusantium aliquam maiores illum ipsa. Corrupti cumque beatae magni repellendus accusamus!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white pt-20">
            <div class="container mx-auto">

                <div class="flex items-center gap-5 flex-col lg:flex-row">
                    <div class="bg-[#F5F5F5] rounded-xl p-5 lg:w-4/6">
                        <img src="{{ asset('assets/images/thumbnails/map.png') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="lg:w-2/6">
                        <p class="font-semibold mb-6">Mega News Information</p>
                    <div class="flex text-sm gap-2">
                        <img src="{{ asset('assets/images/icons/mail.png') }}" alt="">
                        <p>Email : </p>
                        <p>Management@Mega.News</p>
                    </div>
                    <div class="flex text-sm my-3 gap-2">
                        <img src="{{ asset('assets/images/icons/phone.png') }}" alt="">
                        <p>Phone Number : </p>
                        <p>1234567</p>
                    </div>
                    <div class="flex text-sm my-3 gap-2">
                        <img src="{{ asset('assets/images/icons/fax.png') }}" alt="">
                        <p>Fax : </p>
                        <p>12345677</p>
                    </div>
                    <div class="flex text-sm gap-2 my-3">
                        <img src="{{ asset('assets/images/icons/address.png') }}" alt="">
                        <p>Adress : </p>
                        <p>1234 Foxrun St.New Lenox, IL 123456</p>
                    </div>
                    <div class="flex text-sm gap-2 bg-[#F5F5F5] p-2 rounded-lg">
                        <img src="{{ asset('assets/images/icons/time.png') }}" alt="">
                        <p>Responding 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="bg-white pb-32 pt-20">
            <div class="container mx-auto flex flex-col items-center px-4">

                <p class="text-4xl font-bold text-[#007AFF] mb-7">Dosen Pengajar</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:grid-cols-3">
                    <div class="bg-[#007AFF26] rounded-lg hover:bg-[#007AFF] transition">
                        <img src="{{ asset('assets/images/photos/dosen.png') }}" alt="dosen">
                        <p class="text-xl text-white pl-7 pt-2">Adil Rahmat Kurnia</p>
                        <p class="text-white pl-7">Ketua Bidang jaringan</p>
                    </div>
                    <div class="bg-[#007AFF26] rounded-lg hover:bg-[#007AFF] transition">
                        <img src="{{ asset('assets/images/photos/dosen.png') }}" alt="dosen">
                        <p class="text-xl text-white pl-7 pt-2">Adil Rahmat Kurnia</p>
                        <p class="text-white pl-7">Ketua Bidang jaringan</p>
                    </div>
                    <div class="bg-[#007AFF26] rounded-lg hover:bg-[#007AFF] transition">
                        <img src="{{ asset('assets/images/photos/dosen.png') }}" alt="dosen">
                        <p class="text-xl text-white pl-7 pt-2">Adil Rahmat Kurnia</p>
                        <p class="text-white pl-7">Ketua Bidang jaringan</p>
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