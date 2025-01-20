@extends('front.master')
@section('content')

    <body class="font-[Poppins]" style="background-image: url('{{ asset('assets/images/thumbnails/headers.png') }}')">
        <x-navbar />
        <nav id="Category" class="max-w-[1130px] md:mx-auto mx-3 grid md:grid-cols-3 gap-4 mt-[30px]">
            @foreach ($categories as $category)
                <a href="{{ route('front.category', $category->slug) }}"
                    class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] bg-white">
                    <!-- Tambahkan bg-white -->
                    {{-- <div class="w-6 h-6 flex shrink-0">
                        <img src="{{ asset('storage/' . $category->icon) }}" alt="icon" />
                    </div> --}}
                    <span>{{ $category->name ?? 'Kategori Tidak Ditemukan' }}</span>
                </a>
            @endforeach
        </nav>

        <div class="flex gap-5 items-center mx-64">
            <div>
                <p class="text-white font-bold text-5xl">Pendidikan Kader Ulama</p>
                <p class="text-white font-extralight">Pendidikan Kader Ulama (PKU) Istiqlal adalah program pendidikan yang bertujuan untuk melahirkan calon ulama berkualitas dengan kurikulum yang terintegrasi dan inovatif. Program ini memberikan kesempatan untuk belajar dari para pengajar berpengalaman, menawarkan beasiswa S-2, serta membangun jaringan alumni yang solid.</p>
            </div>
            <img src="{{ asset('assets/images/photos/photos-headers.png') }}" alt="" class="w-[25rem] mr-20">
        </div>
        <div class="flex bg-white rounded-xl items-center justify-evenly mx-64 py-3 shadow-lg">
            <div class="font-semibold">
                <p class="text-2xl">Pendidikan Kader</p>
                <p class="text-2xl">Ulama Masjid Istiqlal</p>
            </div>
            <div>
                <p class="font-semibold text-2xl">107</p>
                <p>Mahasiswa Aktif</p>
            </div>
            <div>
                <p class="font-semibold text-2xl">12</p>
                <p>Dosen Berpengalaman</p>
            </div>
            <img src="{{ asset('assets/images/photos/pku.png') }}" alt="">
        </div>

        <div class="bg-white flex items-center gap-5 px-64 py-32">
            <img src="{{ asset('assets/images/thumbnails/pkuimg.jpg') }}" alt="" class="rounded-xl">
            <div>
                <p class="text-4xl font-bold text-[#007AFF]">About US</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum libero hic iusto adipisci, impedit officiis dolores beatae est voluptatum eum delectus corrupti ipsa dicta dolore? Minus vero corrupti eius voluptates!</p>
            </div>
        </div>

        <div class="bg-white px-20">
            <p class="text-4xl font-bold text-[#007AFF] mb-7">Berita Terbaru</p>
            <div class="">
                <div class="grid grid-cols-4">
                    <a class="relative w-[20rem] bg-[#007AFF] rounded-lg" href="{{ route('front.details-news') }}">
                        <img src="{{ asset('assets/images/thumbnails/tasawuf.png') }}" alt="">
                        <p class="absolute right-0 top-0 bg-white mx-2 my-2 px-2 py-1 rounded-lg">Tasawuf</p>
                        <p class="text-white pl-5 py-2">Tasawuf adalah</p>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="24" fill="#007AFF"/>
                            <path d="M15 22.75C14.3096 22.75 13.75 23.3096 13.75 24C13.75 24.6904 14.3096 25.25 15 25.25V22.75ZM33.8839 24.8839C34.372 24.3957 34.372 23.6043 33.8839 23.1161L25.9289 15.1612C25.4408 14.673 24.6493 14.673 24.1612 15.1612C23.673 15.6493 23.673 16.4408 24.1612 16.9289L31.2322 24L24.1612 31.0711C23.673 31.5592 23.673 32.3507 24.1612 32.8388C24.6493 33.327 25.4408 33.327 25.9289 32.8388L33.8839 24.8839ZM15 25.25H33V22.75H15V25.25Z" fill="white"/>
                            </svg>
                    </a>
                    <div class="relative w-[20rem] bg-[#007AFF] rounded-lg" >
                        <img src="{{ asset('assets/images/thumbnails/tasawuf.png') }}" alt="">
                        <p class="absolute right-0 top-0 bg-white mx-2 my-2 px-2 py-1 rounded-lg">Tasawuf</p>
                        <p class="text-white pl-5 py-2">Tasawuf adalah</p>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="24" fill="#007AFF"/>
                            <path d="M15 22.75C14.3096 22.75 13.75 23.3096 13.75 24C13.75 24.6904 14.3096 25.25 15 25.25V22.75ZM33.8839 24.8839C34.372 24.3957 34.372 23.6043 33.8839 23.1161L25.9289 15.1612C25.4408 14.673 24.6493 14.673 24.1612 15.1612C23.673 15.6493 23.673 16.4408 24.1612 16.9289L31.2322 24L24.1612 31.0711C23.673 31.5592 23.673 32.3507 24.1612 32.8388C24.6493 33.327 25.4408 33.327 25.9289 32.8388L33.8839 24.8839ZM15 25.25H33V22.75H15V25.25Z" fill="white"/>
                            </svg>
                    </div>
                    <div class="relative w-[20rem] bg-[#007AFF] rounded-lg" >
                        <img src="{{ asset('assets/images/thumbnails/tasawuf.png') }}" alt="">
                        <p class="absolute right-0 top-0 bg-white mx-2 my-2 px-2 py-1 rounded-lg">Tasawuf</p>
                        <p class="text-white pl-5 py-2">Tasawuf adalah</p>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="24" fill="#007AFF"/>
                            <path d="M15 22.75C14.3096 22.75 13.75 23.3096 13.75 24C13.75 24.6904 14.3096 25.25 15 25.25V22.75ZM33.8839 24.8839C34.372 24.3957 34.372 23.6043 33.8839 23.1161L25.9289 15.1612C25.4408 14.673 24.6493 14.673 24.1612 15.1612C23.673 15.6493 23.673 16.4408 24.1612 16.9289L31.2322 24L24.1612 31.0711C23.673 31.5592 23.673 32.3507 24.1612 32.8388C24.6493 33.327 25.4408 33.327 25.9289 32.8388L33.8839 24.8839ZM15 25.25H33V22.75H15V25.25Z" fill="white"/>
                            </svg>
                    </div>
                    <div class="relative w-[20rem] bg-[#007AFF] rounded-lg" >
                        <img src="{{ asset('assets/images/thumbnails/tasawuf.png') }}" alt="">
                        <p class="absolute right-0 top-0 bg-white mx-2 my-2 px-2 py-1 rounded-lg">Tasawuf</p>
                        <p class="text-white pl-5 py-2">Tasawuf adalah</p>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="24" fill="#007AFF"/>
                            <path d="M15 22.75C14.3096 22.75 13.75 23.3096 13.75 24C13.75 24.6904 14.3096 25.25 15 25.25V22.75ZM33.8839 24.8839C34.372 24.3957 34.372 23.6043 33.8839 23.1161L25.9289 15.1612C25.4408 14.673 24.6493 14.673 24.1612 15.1612C23.673 15.6493 23.673 16.4408 24.1612 16.9289L31.2322 24L24.1612 31.0711C23.673 31.5592 23.673 32.3507 24.1612 32.8388C24.6493 33.327 25.4408 33.327 25.9289 32.8388L33.8839 24.8839ZM15 25.25H33V22.75H15V25.25Z" fill="white"/>
                            </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white px-32 py-56">
            <div class="bg-[#007AFF] rounded-lg flex items-center px-10 py-10">
                <div>
                    <p class="text-[#D7D7D7] text-5xl font-semibold">Apa kata mereka tentang PKU-MI</p>
                </div>
                <div class="flex items-center">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg fill="#ffffff" height="2rem" width="2rem" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                        viewBox="0 0 476.213 476.213" xml:space="preserve">
                        <polygon points="476.213,223.107 57.427,223.107 151.82,128.713 130.607,107.5 0,238.106 130.607,368.714 151.82,347.5 
	                        57.427,253.107 476.213,253.107 "/>
                        </svg>
                    <div class="bg-white rounded-xl flex items-center gap-5 px-10">
                        <div>
                            <img src="{{ asset('assets/images/icons/blue-line.png') }}" alt="">
                            <p class="text-[#9192A6] py-10">PKMUI Istiqlal Jakarta berfungsi sebagai pusat pengembangan generasi ulama masa depan dan diharapkan dapat mempersiapkan calon Mufti yang berkualitas.</p>
                            <p class="font-bold pt-5">KH. Fulan Bin Fulan</p>
                            <p class="pb-10 text-[#9192A6]">Sekretaris Umum PKUMI Istiqlal Jakarta</p>
                            <img src="{{ asset('assets/images/icons/blue-line.png') }}" alt="">
                        </div>
                        <img src="{{ asset('assets/images/photos/fulan.png') }}" alt="">
                    </div>
                    <?xml version="1.0" encoding="iso-8859-1"?>
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg fill="#ffffff" height="2rem" width="2rem" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                        viewBox="0 0 330 330" xml:space="preserve">
                        <path id="XMLID_27_" d="M15,180h263.787l-49.394,49.394c-5.858,5.857-5.858,15.355,0,21.213C232.322,253.535,236.161,255,240,255
	                        s7.678-1.465,10.606-4.394l75-75c5.858-5.857,5.858-15.355,0-21.213l-75-75c-5.857-5.857-15.355-5.857-21.213,0
	                        c-5.858,5.857-5.858,15.355,0,21.213L278.787,150H15c-8.284,0-15,6.716-15,15S6.716,180,15,180z"/>
                        </svg>                            
                </div>
            </div>
        </div>

        <div class="bg-white px-32 pb-32">
            <p class="text-4xl font-bold text-[#007AFF] mb-7">Dosen Pengajar</p>
            <div class="grid grid-cols-3 pl-20">
                <div class="bg-[#007AFF26] w-[20rem] rounded-lg hover:bg-[#007AFF] transition">
                    <img src="{{ asset('assets/images/photos/dosen.png') }}" alt="dosen">
                    <p class="text-xl text-white pl-7 pt-2">Adil Rahmat Kurnia</p>
                    <p class="text-white pl-7">Ketua Bidang jaringan</p>
                </div>
                <div class="bg-[#007AFF26] w-[20rem] rounded-lg hover:bg-[#007AFF] transition">
                    <img src="{{ asset('assets/images/photos/dosen.png') }}" alt="dosen">
                    <p class="text-xl text-white pl-7 pt-2">Adil Rahmat Kurnia</p>
                    <p class="text-white pl-7">Ketua Bidang jaringan</p>
                </div>
                <div class="bg-[#007AFF26] w-[20rem] rounded-lg hover:bg-[#007AFF] transition">
                    <img src="{{ asset('assets/images/photos/dosen.png') }}" alt="dosen">
                    <p class="text-xl text-white pl-7 pt-2">Adil Rahmat Kurnia</p>
                    <p class="text-white pl-7">Ketua Bidang jaringan</p>
                </div>
            </div>
        </div>

        <x-footer></x-footer>

        {{-- <div class="bg-white">
            <section id="Featured" class="">
                <div class="main-carousel w-full">

                    @forelse($featured_articles as $article)
                        <div class="featured-news-card relative w-full h-[550px] flex shrink-0 overflow-hidden">
                            <img src="{{ asset('storage/' . $article->thumbnail) }}"
                                class="thumbnail absolute w-full h-full object-cover" alt="icon" />
                            <div
                                class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10">
                            </div>
                            <div
                                class="card-detail max-w-[1130px] w-full md:mx-auto mx-3 flex items-end justify-between pb-10 relative z-20">
                                <div class="flex flex-col gap-[10px]">
                                    <p class="text-white">Featured</p>
                                    <a href="{{ route('front.details', $article->slug) }}"
                                        class="font-bold text-4xl leading-[45px] text-white two-lines hover:underline transition-all duration-300">{{ $article->name }}</a>
                                    <p class="text-white">{{ $article->created_at->format('M d, Y') }} •
                                        {{ $article->category->name }}</p>
                                </div>
                                <div class="prevNextButtons flex items-center gap-4 mb-[60px]">
                                    <button
                                        class="button--previous appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                        <img src="assets/images/icons/arrow.svg" alt="arrow" />
                                    </button>
                                    <button
                                        class="button--next appearance-none w-[38px] h-[38px] flex items-center justify-center rounded-full shrink-0 ring-1 ring-white hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 rotate-180">
                                        <img src="assets/images/icons/arrow.svg" alt="arrow" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Belum ada data terbaru</p>
                    @endforelse

                </div>
            </section>
            <section id="Up-to-date" class="mx-3 md:mx-64 flex flex-col gap-[30px] mt-[70px]">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-[26px] leading-[39px]">
                        Karya Ilmiah Terbaru <br />
                        Untuk Bacaan Anda
                    </h2>
                    <p
                        class="badge-orange rounded-full p-[8px_18px] bg-[#FFECE1] font-bold text-sm leading-[21px] text-[#FF6B18] w-fit">
                        UP TO DATE</p>
                </div>
                <div class="grid md:grid-cols-3 gap-[30px]">

                    @forelse($articles as $article)
                        <a href="{{ route('front.details', $article->slug) }}" class="card-news">
                            <div
                                class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[26px_20px] flex flex-col gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300 bg-white">
                                <div
                                    class="thumbnail-container w-full h-[200px] rounded-[20px] flex shrink-0 overflow-hidden relative">
                                    <p
                                        class="badge-white absolute top-5 left-5 rounded-full p-[8px_18px] bg-white font-bold text-xs leading-[18px]">
                                        {{ $article->category->name }}</p>
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}"
                                        class="object-cover w-full h-full" alt="thumbnail" />
                                </div>
                                <div class="card-info flex flex-col gap-[6px]">
                                    <h3 class="font-bold text-lg leading-[27px]">{{ $article->name }}</h3>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                        {{ $article->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p>Belum ada data terbaru...</p>
                    @endforelse

                </div>
            </section>
            <section id="Best-authors" class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[70px]">
                <div class="flex flex-col text-center gap-[14px] items-center">
                    <p
                        class="badge-orange rounded-full p-[8px_18px] bg-[#FFECE1] font-bold text-sm leading-[21px] text-[#FF6B18] w-fit">
                        PENULIS TERPILIH</p>
                    <h2 class="font-bold text-[26px] leading-[39px]">
                        Jelajahi Karya Ilmiah dari <br />
                        Para Mahasiswa Unggulan
                    </h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-[30px] mx-3">
                    @forelse($authors as $author)
                        <a href="{{ route('front.author', $author->slug) }}" class="card-authors">
                            <div
                                class="rounded-[20px] border border-[#EEF0F7] p-[26px_20px] flex flex-col items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                <div class="w-[70px] h-[70px] flex shrink-0 rounded-full overflow-hidden bg-gray-200">
                                    @if ($author->avatar)
                                        <img src="{{ asset('storage/' . $author->avatar) }}"
                                            class="object-cover w-full h-full" alt="avatar" />
                                    @else
                                        <div class="flex items-center justify-center w-full h-full">
                                            <i class="text-gray-500 text-xl fas fa-user"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="flex flex-col gap-1 text-center">
                                    <p class="font-semibold">{{ $author->name }}</p>
                                    <p class="text-sm leading-[21px] text-[#A3A6AE]">{{ $author->news->count() }}</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p>Belum ada data</p>
                    @endforelse

                </div>
            </section>
            <section id="Advertisement" class="max-w-[1130px] md:mx-auto mx-3 flex justify-center mt-[70px]">
                <div class="flex flex-col gap-3 shrink-0 w-full">
                    <a href="{{ $bannerads->link ?? '#' }}">
                        <div class="w-full h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
                            @if (isset($bannerads->thumbnail))
                                <img src="{{ Storage::url($bannerads->thumbnail) }}" class="object-cover w-full h-full"
                                    alt="ads" />
                            @else
                                <img src="{{ asset('assets/images/default-banner.jpg') }}"
                                    class="object-cover w-full h-full" alt="default ads" />
                            @endif


                        </div>
                    </a>
                    <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                        Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                                src="assets/images/icons/message-question.svg" alt="icon" /></a>
                    </p>
                </div>
            </section>
            <section id="Latest-entertainment" class="max-w-[1130px] md:mx-auto mx-3 flex flex-col gap-[30px] mt-[70px]">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-[26px] leading-[39px]">
                        Terbaru di Jurnal Akademik
                    </h2>
                    <a href="categoryPage.html"
                        class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">Explore
                        All</a>
                </div>
                <div class="md:flex justify-between items-center h-fit">
                    <div class="featured-news-card relative md:w-3/6 h-[424px] flex flex-1 rounded-[20px] overflow-hidden">
                        @if (isset($entertainment_featured_articles->thumbnail))
                            <img src="{{ Storage::url($entertainment_featured_articles->thumbnail) }}"
                                class="thumbnail absolute w-full h-full object-cover" alt="icon" />
                        @else
                            <img src="{{ asset('assets/images/default-banner.jpg') }}"
                                class="thumbnail absolute w-full h-full object-cover" alt="icon" />
                        @endif

                        <div class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10">
                        </div>
                        <div class="card-detail w-full flex items-end p-[30px] relative z-20">
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-white">Featured</p>
                                <a href="{{ route('front.details', $entertainment_featured_articles->slug) }}"
                                    class="font-bold text-[30px] leading-[36px] text-white hover:underline transition-all duration-300">{{ $entertainment_featured_articles->name ?? '' }}</a>
                                <p class="text-white">
                                    @if (isset($entertainment_featured_articles->created_at))
                                        {{ $entertainment_featured_articles->created_at->format('M d, Y') }}
                                    @else
                                        Tanggal tidak tersedia
                                    @endif

                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="h-[424px] md:w-3/6 w-fit px-5 overflow-y-scroll overflow-x-hidden relative custom-scrollbar">
                        <div class="w-full max-w-full flex flex-col gap-5 shrink-0 mx-auto">
                            @forelse($entertainment_articles as $article)
                                <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                    <div
                                        class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                        <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                            @if (isset($article->thumbnail))
                                                <img src="{{ Storage::url($article->thumbnail) }}"
                                                    class="object-cover w-full h-full" alt="thumbnail" />
                                            @else
                                                <img src="{{ asset('assets/images/default-banner.jpg') }}"
                                                    class="object-cover w-full h-full" alt="thumbnail" />
                                            @endif

                                        </div>
                                        <div class="flex flex-col justify-center-center gap-[6px]">
                                            <h3 class="font-bold text-lg leading-[27px]">
                                                {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
                                            </h3>
                                            <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                                {{ $article->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <p>belum ada artikel terbaru</p>
                            @endforelse

                        </div>
                        <div
                            class="sticky z-10 bottom-0 w-full h-[100px] bg-gradient-to-b from-[rgba(255,255,255,0.19)] to-[rgba(255,255,255,1)]">
                        </div>
                    </div>
                </div>
            </section>
            <section id="Latest-business" class="max-w-[1130px] md:mx-auto mx-3 flex flex-col gap-[30px] mt-[70px]">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-[26px] leading-[39px]">
                        Terbaru di Kajian Islam
                    </h2>
                    <a href="categoryPage.html"
                        class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">Explore
                        All</a>
                </div>
                <div class="md:flex justify-between items-center h-fit">
                    <div class="featured-news-card relative md:w-3/6 h-[424px] flex flex-1 rounded-[20px] overflow-hidden">
                        @if (isset($business_featured_articles->thumbnail))
                            <img src="{{ Storage::url($business_featured_articles->thumbnail) }}"
                                class="thumbnail absolute w-full h-full object-cover" alt="icon" />
                        @else
                            <img src="{{ asset('assets/images/default-banner.jpg') }}"
                                class="thumbnail absolute w-full h-full object-cover" alt="icon" />
                        @endif

                        <div
                            class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10">
                        </div>
                        <div class="card-detail w-full flex items-end p-[30px] relative z-20">
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-white">Featured</p>
                                <a href="{{ route('front.details', $business_featured_articles->slug) }}"
                                    class="font-bold text-[30px] leading-[36px] text-white hover:underline transition-all duration-300">{{ $business_featured_articles->name ?? '' }}</a>
                                @if (isset($business_featured_articles->created_at))
                                    <p class="text-white">{{ $business_featured_articles->created_at->format('M d, Y') }}
                                    </p>
                                @else
                                    Tanggal tidak tersedia
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="h-[424px] md:w-3/6 px-5 overflow-y-scroll overflow-x-hidden relative custom-scrollbar">
                        <div class="flex flex-col gap-5 shrink-0">
                            @forelse($business_articles as $article)
                                <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                    <div
                                        class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                        <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                            <img src="{{ Storage::url($article->thumbnail) }}"
                                                class="object-cover w-full h-full" alt="thumbnail" />
                                        </div>
                                        <div class="flex flex-col justify-center-center gap-[6px]">
                                            <h3 class="font-bold text-lg leading-[27px]">
                                                {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
                                            </h3>
                                            <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                                {{ $article->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <p>belum ada artikel terbaru</p>
                            @endforelse

                        </div>
                        <div
                            class="sticky z-10 bottom-0 w-full h-[100px] bg-gradient-to-b from-[rgba(255,255,255,0.19)] to-[rgba(255,255,255,1)]">
                        </div>
                    </div>
                </div>
            </section>
            <section id="Latest-automotive" class="max-w-[1130px] md:mx-auto mx-3 flex flex-col gap-[30px] mt-[70px]">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-[26px] leading-[39px]">
                        Terbaru di Ekonomi Syariah
                    </h2>
                    <a href="categoryPage.html"
                        class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">Explore
                        All</a>
                </div>
                <div class="md:flex justify-between items-center h-fit">
                    <div class="featured-news-card relative md:w-3/6 h-[424px] flex flex-1 rounded-[20px] overflow-hidden">
                        @if (isset($automotive_featured_articles->thumbnail))
                            <img src="{{ Storage::url($automotive_featured_articles->thumbnail) }}"
                                class="thumbnail absolute w-full h-full object-cover" alt="icon" />
                        @else
                            <img src="{{ asset('assets/images/default-banner.jpg') }}"
                                class="thumbnail absolute w-full h-full object-cover" alt="icon" />
                        @endif

                        <div
                            class="w-full h-full bg-gradient-to-b from-[rgba(0,0,0,0)] to-[rgba(0,0,0,0.9)] absolute z-10">
                        </div>
                        <div class="card-detail w-full flex items-end p-[30px] relative z-20">
                            <div class="flex flex-col gap-[10px]">
                                <p class="text-white">Featured</p>
                                <a href="{{ route('front.details', $automotive_featured_articles->slug) }}"
                                    class="font-bold text-[30px] leading-[36px] text-white hover:underline transition-all duration-300">{{ $automotive_featured_articles->name ?? '' }}</a>
                                @if (isset($automotive_featured_articles->created_at))
                                    <p class="text-white">
                                        {{ $automotive_featured_articles->created_at->format('M d, Y') }}
                                    @else
                                        Tanggal tidak tersedia
                                @endif

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="h-[424px] md:w-3/6 px-5 overflow-y-scroll overflow-x-hidden relative custom-scrollbar">
                        <div class="w-full flex flex-col gap-5 shrink-0">
                            @forelse($automotive_articles as $article)
                                <a href="{{ route('front.details', $article->slug) }}" class="card py-[2px]">
                                    <div
                                        class="rounded-[20px] border border-[#EEF0F7] p-[14px] flex items-center gap-4 hover:ring-2 hover:ring-[#FF6B18] transition-all duration-300">
                                        <div class="w-[130px] h-[100px] flex shrink-0 rounded-[20px] overflow-hidden">
                                            <img src="{{ Storage::url($article->thumbnail) }}"
                                                class="object-cover w-full h-full" alt="thumbnail" />
                                        </div>
                                        <div class="flex flex-col justify-center-center gap-[6px]">
                                            <h3 class="font-bold text-lg leading-[27px]">
                                                {{ substr($article->name, 0, 50) }}{{ strlen($article->name) > 50 ? '...' : '' }}
                                            </h3>
                                            <p class="text-sm leading-[21px] text-[#A3A6AE]">
                                                {{ $article->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <p>belum ada artikel terbaru</p>
                            @endforelse

                        </div>
                        <div
                            class="sticky z-10 bottom-0 w-full h-[100px] bg-gradient-to-b from-[rgba(255,255,255,0.19)] to-[rgba(255,255,255,1)]">
                        </div>
                    </div>
                </div>
            </section>
            <x-footer />
        </div> --}}


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
