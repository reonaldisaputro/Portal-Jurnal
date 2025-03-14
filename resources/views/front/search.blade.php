<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{asset('output.css')}}" rel="stylesheet" />
		<link href="{{asset('main.css')}}" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body class="font-[Poppins] bg-[#F9F9FC]">
		<x-navbar/>
		<section id="heading" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px]">
			<h1 class="text-4xl leading-[45px] font-bold text-center">
				Explore Hot Trending <br />
				Good News Today
			</h1>
			
		</section>
		<section id="search-result" class="max-w-[1130px] mx-auto flex items-start flex-col gap-[30px] mt-[70px] mb-[100px] px-4 md:px-0">
			<h2 class="text-[26px] leading-[39px] font-bold">Search Result: <span>{{ucfirst($keyword)}}</span></h2>
			<div id="search-cards" class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]">
                @forelse($articles as $article)
				<a href="{{route('front.details', $article->slug)}}" class="card">
                    <div
                        class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
                        <div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
                            <div
                                class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
                                <p class="text-xs leading-[18px] font-bold uppercase">{{$article->category->name}}</p>
                            </div>
                            <img src="{{ asset('storage/public/' . $article->thumbnail) }}" alt="thumbnail photo"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col gap-[6px]">
                            <h3 class="text-lg leading-[27px] font-bold">{{$article->name}}</h3>
                            <p class="text-sm leading-[21px] text-[#A3A6AE]">{{$article->created_at->format('M d, Y')}}</p>
                        </div>
                    </div>
                </a>
                @empty
                <p>Belum ada artikel dengan keyword tersebut</p>
                @endforelse
				
			</div>
		</section>
        <x-footer />
	</body>
</html>
