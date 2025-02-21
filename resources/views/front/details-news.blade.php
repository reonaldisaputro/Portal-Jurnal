@extends('front.master')
@section('content')

    <body class="font-[Poppins]">
        <x-navbar></x-navbar>

        <div class="flex flex-col md:flex-row gap-6 px-4 md:px-20 py-8">
            <div class="w-full md:w-4/6">
                <div class="bg-[#F5F5F5] rounded-lg p-3">
                    <img class="rounded-lg" src="{{ asset($articleNews->thumbnail) }}" alt="{{ $articleNews->name }}">
                    <p class="text-3xl font-semibold">{{ $articleNews->name }}</p>
                </div>
                <div class="flex items-center justify-center gap-5 my-7 text-[#3E3232BF] text-sm">
                    <div>
                        <p>{{ $articleNews->created_at->format('F d, Y') }}</p>
                    </div>
                    <!-- <div>
                        <p>Comments : 35</p>
                    </div> -->
                    <div>
                        <p>Category: {{ $articleNews->category->name ?? 'Uncategorized' }}</p>
                    </div>
                </div>
                <div class="text-lg leading-loose">
                    {!! $articleNews->content !!}
                </div>
                <!-- <div class="my-8 md:my-32">
                    <p class="font-semibold mt-6 mb-4">Comments</p>
                    <div class="space-y-4">
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
                            <p class="text-sm">When you are ready to indulge your sense of excitement, check out the range of water- sports opportunities at the resort's on-site water-sports center. Want to leave your stress on the water? The resort has kayaks, paddleboards, or the low-key pedal boats.</p>
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
                            <p class="text-sm">When you are ready to indulge your sense of excitement, check out the range of water- sports opportunities at the resort's on-site water-sports center. Want to leave your stress on the water? The resort has kayaks, paddleboards, or the low-key pedal boats.</p>
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
                            <p class="text-sm">When you are ready to indulge your sense of excitement, check out the range of water- sports opportunities at the resort's on-site water-sports center. Want to leave your stress on the water? The resort has kayaks, paddleboards, or the low-key pedal boats.</p>
                        </div>
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
                </div> -->
            </div>
            
            <!-- Sidebar -->
            <div class="w-full md:w-2/6 space-y-4">
                <div class="bg-[#F5F5F5] p-4 rounded-lg">
                    <p class="font-semibold text-xl">Related Articles</p>
                    @foreach ($related_articles as $article)
                        <a href="{{ route('front.details', $article->slug) }}" class="block bg-white p-3 rounded-lg shadow-md mt-3">
                            <p class="font-semibold">{{ $article->name }}</p>
                            <p class="text-sm text-[#3E3232BF]">{{ $article->created_at->format('F d, Y') }}</p>
                        </a>
                    @endforeach
                </div>

                <div class="bg-[#F5F5F5] p-4 rounded-lg">
                    <p class="font-semibold text-xl">Author: {{ $articleNews->author->name }}</p>
                    <p class="text-sm text-[#3E3232BF]">Articles by this author:</p>
                    @foreach ($author_news as $article)
                        <a href="{{ route('front.details', $article->slug) }}" class="block bg-white p-3 rounded-lg shadow-md mt-3">
                            <p class="font-semibold">{{ $article->name }}</p>
                        </a>
                    @endforeach
                </div>

                <!-- Ads -->
                @if ($square_ads_1)
                    <div class="mt-5">
                        <img class="rounded-xl w-full" src="{{ asset('storage/' . $square_ads_1->thumbnail) }}" alt="Advertisement">
                    </div>
                @endif

                @if ($square_ads_2)
                    <div class="mt-5">
                        <img class="rounded-xl w-full" src="{{ asset('storage/' . $square_ads_2->thumbnail) }}" alt="Advertisement">
                    </div>
                @endif
            </div>
        </div>

        <x-footer></x-footer>
    </body>
@endsection

@push('after-scripts')
    <script src="https://cdn.tailwindcss.com"></script>
@endpush