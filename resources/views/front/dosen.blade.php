@extends('front.master')
@section('content')

<body class="font-[Poppins]" style="background-image: url('{{ asset('assets/images/thumbnails/headers.png') }}')">
    <x-navbar/>
    <p class="text-white text-4xl font-bold mx-20 my-20">Dosen Kami</p>

    <div class="bg-white w-full h-max">
        <div class="container mx-auto flex flex-col items-center px-4 py-10">
            <div class="flex justify-between items-center w-full">
                <p class="text-4xl font-bold text-[#007AFF] mb-7">Dosen Kami</p>
                <a href="/dosen" class="bg-[#F5F5F5] px-2 py-2 text-sm rounded-lg font-bold text-[#3E3232BF] mb-7">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
              
                    <div class="bg-[#007AFF26] rounded-xl hover:bg-[#007AFF] transition p-3 group w-[15rem] border border-[#E5E5E5] hover:shadow-md">
                        <img src="\assets\images\photos\dosen.png" alt="dosen" class="h-56 rounded-xl w-full object-cover">
                        <p class="text-lg text-black pt-4 font-semibold group-hover:text-white">Pak Hambali Ahmad</p>
                        <p class="text-white text-sm text-[#00000087] group-hover:text-white">Bahasa Arab</p>
                    </div>
                    <div class="bg-[#007AFF26] rounded-xl hover:bg-[#007AFF] transition p-3 group w-[15rem] border border-[#E5E5E5] hover:shadow-md">
                        <img src="\assets\images\photos\dosen.png" alt="dosen" class="h-56 rounded-xl w-full object-cover">
                        <p class="text-lg text-black pt-4 font-semibold group-hover:text-white">Pak Hambali Ahmad</p>
                        <p class="text-white text-sm text-[#00000087] group-hover:text-white">Bahasa Arab</p>
                    </div>
                    <div class="bg-[#007AFF26] rounded-xl hover:bg-[#007AFF] transition p-3 group w-[15rem] border border-[#E5E5E5] hover:shadow-md">
                        <img src="\assets\images\photos\dosen.png" alt="dosen" class="h-56 rounded-xl w-full object-cover">
                        <p class="text-lg text-black pt-4 font-semibold group-hover:text-white">Pak Hambali Ahmad</p>
                        <p class="text-white text-sm text-[#00000087] group-hover:text-white">Bahasa Arab</p>
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