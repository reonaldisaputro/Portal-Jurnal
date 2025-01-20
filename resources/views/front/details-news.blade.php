@extends('front.master')
@section('content')

    <body class="font-[Poppins]">
        <x-navbar></x-navbar>

        <div class="flex px-32 gap-3">
            <div class="w-4/6">
                <div class="bg-[#F5F5F5] rounded-lg p-3">
                    <img class="rounded-lg" src="{{ asset('assets/images/thumbnails/detailsnews.png') }}" alt="">
                    <p class="text-3xl font-semibold">Keesaan Allah Ta’ala merujuk pada keyakinan bahwa hanya ada satu Tuhan yang Maha Esa</p>
                </div>
                <div class="flex items-center justify-center gap-5 my-7 text-[#3E3232BF] text-sm">
                    <div>
                        <p>July 14, 2022</p>
                    </div>
                    <div>
                        <p>Comments : 35</p>
                    </div>
                    <div>
                        <p>Category : islam </p>
                    </div>
                </div>
                <div>
                    <p class="text-xl font-semibold">Tauhid Adalah Hak Allah Yang Paling Agung</p>
                    <p class="my-3 leading-loose">Mengesakan Allah dalam hal ini merupakah hak Allah Subhanahu wa Ta’ala, hak Allah terhadap hambaNya. Yaitu agar hambaNya mengesakan Allah Subhanahu wa Ta’ala. Dan wajib bagi seorang hamba untuk mengesakan Allah dalam hal tersebut dan tidak menjadikan sesuatu daripada ibadah itu dia peruntukan kepada sesuatu selain Allah. Seorang tidak boleh berdoa kepada selain Allah, seseorang tidak boleh minta pertolongan dan bantuan kepada selain Allah, seseorang tidak boleh menyembelih untuk selain Allah, seseorang tidak boleh bernadzar kepada selain Allah Subhanahu wa Ta’ala. Karena semua itu adalah ketaatan dan ibadah. Ketaatan harus satu-satunya untuk Allah dan ibadah semuanya harus untuk Allah Subhanahu wa Ta’ala.</p>
                    <img class="rounded-xl px-10" src="{{ asset('assets/images/thumbnails/detailsnews.png') }}" alt="">
                    <p class="text-xl font-semibold mt-4">Tauhid Adalah Hak Allah Yang Paling Agung</p>
                    <p class="my-3 leading-loose">Mengesakan Allah dalam hal ini merupakah hak Allah Subhanahu wa Ta’ala, hak Allah terhadap hambaNya. Yaitu agar hambaNya mengesakan Allah Subhanahu wa Ta’ala. Dan wajib bagi seorang hamba untuk mengesakan Allah dalam hal tersebut dan tidak menjadikan sesuatu daripada ibadah itu dia peruntukan kepada sesuatu selain Allah. Seorang tidak boleh berdoa kepada selain Allah, seseorang tidak boleh minta pertolongan dan bantuan kepada selain Allah, seseorang tidak boleh menyembelih untuk selain Allah, seseorang tidak boleh bernadzar kepada selain Allah Subhanahu wa Ta’ala. Karena semua itu adalah ketaatan dan ibadah. Ketaatan harus satu-satunya untuk Allah dan ibadah semuanya harus untuk Allah Subhanahu wa Ta’ala.</p>
                </div>
                <div class="my-32">
                    <p class="font-semibold mt-10 mb-5">Comments</p>
                    <div class="bg-[#F5F5F5] p-5 rounded-xl shadow-xl">
                        <div class="flex items-center justify-between bg-[#F5F5F5] rounded-lg p-2">
                            <div class="flex items-center gap-4">
                                
                                <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-12">
                                <div>
                                    <p>Aisha Rahman</p>
                                    <p class="text-[#3E3232BF] text-xs">20 Agustus 2023</p>
                                </div>
                            </div>
                            <p class="font-semibold">Reply</p>
                        </div>
                        <p class="text-sm">When you are ready to indulge your sense of excitement, check out the range of water- sports opportunities at the resort’s on-site water-sports center. Want to leave your stress on the water? The resort has kayaks, paddleboards, or the low-key pedal boats.</p>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow-xl">
                        <div class="flex items-center justify-between bg-white rounded-lg p-2">
                            <div class="flex items-center gap-4">
                                
                                <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-12">
                                <div>
                                    <p>Aisha Rahman</p>
                                    <p class="text-[#3E3232BF] text-xs">20 Agustus 2023</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm">When you are ready to indulge your sense of excitement, check out the range of water- sports opportunities at the resort’s on-site water-sports center. Want to leave your stress on the water? The resort has kayaks, paddleboards, or the low-key pedal boats.</p>
                    </div>
                    <div class="bg-[#F5F5F5] p-5 rounded-xl">
                        <div class="flex items-center justify-between bg-[#F5F5F5] rounded-lg p-2">
                            <div class="flex items-center gap-4">
                                
                                <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-12">
                                <div>
                                    <p>Aisha Rahman</p>
                                    <p class="text-[#3E3232BF] text-xs">20 Agustus 2023</p>
                                </div>
                            </div>
                            <p class="font-semibold">Reply</p>
                        </div>
                        <p class="text-sm">When you are ready to indulge your sense of excitement, check out the range of water- sports opportunities at the resort’s on-site water-sports center. Want to leave your stress on the water? The resort has kayaks, paddleboards, or the low-key pedal boats.</p>
                    </div>
                </div>
                <div>
                    <p class=" text-xl font-semibold mb-3">Add A Comment</p>
                    <form class="flex items-center gap-5">
                        <div class="w-1/2">
                            <p class="font-semibold mb-2">Name</p>
                            <input type="text" class="bg-[#F5F5F5] w-full py-2 px-3 rounded-lg">
                            <p class="font-semibold mb-2 mt-5">Website</p>
                            <input type="text" class=" mb-5 bg-[#F5F5F5] w-full py-2 px-3 rounded-lg">
                            <p class="font-semibold mb-2">Email</p>
                            <input type="text" class="bg-[#F5F5F5] w-full py-2 px-3 rounded-lg">
                        </div>
                        <div class="w-1/2">
                            <p class="font-semibold">Comment</p>
                            <textarea class="bg-[#F5F5F5] w-full py-2 px-3 rounded-lg" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-2/6">
                <div class="flex items-center gap-2 mb-5">
                    <p class="text-sm bg-[#F5F5F5] p-2 rounded-lg">Bagikan</p>
                    <p class="text-sm bg-[#F5F5F5] p-2 rounded-lg">Penandaan</p>
                    <p class="text-sm bg-[#F5F5F5] p-2 rounded-lg">Komentar</p>
                </div>
                <div class="flex gap-2 justify-between bg-[#F5F5F5] p-2 rounded-lg mb-5">
                    <div class="flex gap-10 items-center">
                        <img src="{{ asset('assets/images/photos/photo.png') }}" alt="" class="w-20">
                        <div>
                            <p class="font-semibold mb-2">Louis</p>
                            <button class="bg-[#F81539BF] text-sm text-white px-4 py-2 rounded-xl">Ikuti</button>
                        </div>
                    </div>
                    <p>27 pos</p>
                </div>
                <div class="bg-[#F5F5F5] p-2 rounded-lg mb-5">
                    <p class="font-semibold text-xl">Tag</p>
                    <p>Islam</p>
                </div>
                <div class="flex items-center gap-3 bg-[#F5F5F5] p-2 rounded-lg">
                    <img class="w-32" src="{{ asset('assets/images/thumbnails/th-building.png') }}" alt="">
                    <div>
                        <p class="font-semibold text-sm">Cara Menghabiskan Hari Sempurna di Pulau Paling Magis di Kroasia</p>
                        <p class="text-[#3E3232BF] text-sm">Subjudul</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-[#F5F5F5] p-2 rounded-lg">
                    <img class="w-32" src="{{ asset('assets/images/thumbnails/th-building.png') }}" alt="">
                    <div>
                        <p class="font-semibold text-sm">Cara Menghabiskan Hari Sempurna di Pulau Paling Magis di Kroasia</p>
                        <p class="text-[#3E3232BF] text-sm">Subjudul</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-[#F5F5F5] p-2 rounded-lg">
                    <img class="w-32" src="{{ asset('assets/images/thumbnails/th-building.png') }}" alt="">
                    <div>
                        <p class="font-semibold text-sm">Cara Menghabiskan Hari Sempurna di Pulau Paling Magis di Kroasia</p>
                        <p class="text-[#3E3232BF] text-sm">Subjudul</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-[#F5F5F5] p-2 rounded-lg">
                    <img class="w-32" src="{{ asset('assets/images/thumbnails/th-building.png') }}" alt="">
                    <div>
                        <p class="font-semibold text-sm">Cara Menghabiskan Hari Sempurna di Pulau Paling Magis di Kroasia</p>
                        <p class="text-[#3E3232BF] text-sm">Subjudul</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-[#F5F5F5] p-2 rounded-lg">
                    <img class="w-32" src="{{ asset('assets/images/thumbnails/th-building.png') }}" alt="">
                    <div>
                        <p class="font-semibold text-sm">Cara Menghabiskan Hari Sempurna di Pulau Paling Magis di Kroasia</p>
                        <p class="text-[#3E3232BF] text-sm">Subjudul</p>
                    </div>
                </div>
                <div class="mt-5">
                    <img class="rounded-xl w-full" src="{{ asset('assets/images/iklans/ads.png') }}"alt="">
                </div>
                <div class="mt-5">
                    <img class="rounded-xl w-full" src="{{ asset('assets/images/iklans/ads.png') }}"alt="">
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="flex justify-between items-center mx-20 pt-10">
                <p>Trendy Posts</p>
                <a class="bg-[#F5F5F5] px-3 py-2 rounded-md">
                    <p>Show All</p>
                </a>
            </div>
        </div>

        <div class="bg-white px-20">
            <div class="grid grid-cols-4 gap-5">
                <div class="bg-white shadow-xl rounded-lg p-3">
                    <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                    <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                    <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a self-driving car in one month?</p>
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
                    <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                    <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                    <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a self-driving car in one month?</p>
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
                    <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                    <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                    <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a self-driving car in one month?</p>
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
                    <img class="w-full object-cover rounded-lg" src="{{ asset('assets/images/thumbnails/headers.png') }}" alt="Tauhid">
                    <p class="font-semibold my-2">How to build a self-driving car in one month</p>
                    <p class="text-xs mb-2">Can I learn the necessary computer science to build the software part of a self-driving car in one month?</p>
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

        <x-footer></x-footer>
    </body>
@endsection

@push('after-scripts')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush