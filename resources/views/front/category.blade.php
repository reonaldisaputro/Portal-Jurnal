@extends('front.master')
@section('content')

    <body class="font-[Poppins] pb-[83px] bg-[#F9F9FC]">
        <x-navbar :categories="$categories"/>
    
        <section id="Category-result" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px]">
    <h1 class="text-4xl leading-[45px] font-bold text-center">
        Explore Our <br />
        {{ $category->name }} Article
    </h1>

    <!-- Grid Cards -->
    <div id="search-cards" class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[30px] mx-3 w-full px-4 md:px-0">
        @forelse ($category->news as $news)
            <a href="{{ route('front.details', $news->slug) }}" class="card">
                <div class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 
                            ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
                    
                    <!-- Thumbnail -->
                    <div class="thumbnail-container relative rounded-[20px] overflow-hidden aspect-[16/10]">
                        <div class="badge absolute left-5 top-5 p-[8px_18px] bg-white rounded-[50px]">
                            <p class="text-xs leading-[18px] font-bold uppercase">{{ $news->category->name }}</p>
                        </div>
                        <img src="{{ asset('storage/public/' . $news->thumbnail) }}" 
                             alt="thumbnail photo" 
                             class="w-full h-full object-cover" />
                    </div>

                    <!-- Card Content -->
                    <div class="flex flex-col gap-[6px]">
                        <h3 class="text-lg leading-[27px] font-bold">
                            {{ substr($news->name, 0, 50) }}{{ strlen($news->name) > 50 ? '...' : '' }}
                        </h3>
                        <p class="text-sm leading-[21px] text-[#A3A6AE]">
                            {{ $news->created_at->format('M d, Y') }}
                        </p>
                    </div>
                </div>
            </a>
        @empty
            <p class="text-center col-span-full">Belum ada artikel terkait kategori berikut</p>
        @endforelse
    </div>
</section>

        <section id="Advertisement" class="max-w-[1130px] md:mx-auto mx-3 flex justify-center mt-[70px]">
            <div class="flex flex-col gap-3 shrink-0 w-full">
                <a href="{{ $bannerads->link }}">
                    <div class="w-full h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
                        <img src="{{ asset('storage/public/' . $bannerads->thumbnail) }}" class="object-cover w-full h-full"
                            alt="ads" />
                    </div>
                </a>
                {{-- <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
				Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
						src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
			</p> --}}
            </div>
        </section>
        <x-footer />
    </body>
@endsection

@push('after-scripts')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush
