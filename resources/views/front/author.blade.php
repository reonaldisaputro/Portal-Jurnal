<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="{{asset('output.css')}}" rel="stylesheet" />
	<link href="{{asset('main.css')}}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-[Poppins] bg-[#F9F9FC]">
	<x-navbar/>
	<nav id="Category" class="max-w-[1130px] md:mx-auto mx-3 grid md:grid-cols-3 gap-4 mt-[30px]">
        @foreach($categories as $item_category)
        <a href="{{route('front.category', $item_category->slug)}}" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18]">
            <div class="w-6 h-6 flex shrink-0">
                <img src="{{Storage::url($item_category->icon)}}" alt="icon" />
            </div>
            <span>{{ $item_category->name }}</span>
        </a>
        @endforeach
    </nav>
	<section class="max-w-[1130px] my-10 md:mx-auto mx-3 bg-white rounded-xl">
		<div class="flex items-center gap-6 py-5 px-5">
			<div class="md:w-52 md:h-52 w-44 h-44 flex rounded-full overflow-hidden">
				<img src="{{ Storage::url($author->avatar) }}" alt="Profile Photo" class="object-cover">
			</div>
			<div>
				<h1 class="text-[#5D5F65] text-3xl font-bold">{{ $author->name }}</h1>
				<p class="text-[#5D5F65]">{{ $author->occupation }}</p>
			</div>
		</div>
	</section>
	<section class="max-w-[1130px] md:flex justify-between gap-5 my-10 md:mx-auto mx-3">
		<div class="bg-white p-5">
			<p class="font-bold text-xl">Tentang Saya</p>
			<p>Yoga Pratama adalah mahasiswa program studi Dakwah dan Komunikasi di UIN Yogyakarta. Ia telah menulis beberapa jurnal terkait literasi digital dan pengaruh teknologi dalam pengembangan dakwah Islam. Ahmad aktif di berbagai organisasi mahasiswa dan berfokus pada pengembangan dakwah berbasis digital.</p>
			<p class="font-bold pt-3">Kategori</p>
			<div class="grid md:grid-cols-5 gap-2">
				@forelse ($author->news->unique('category_id') as $news)
					<button class="border rounded-md shadow-lg py-3 px-3 text-[#FF6B18] hover:shadow-2xl">{{ $news->category->name }}</button>
				@empty
				<p>Belum ada artikel yang ditulis</p>
				@endforelse
			</div>
		</div>
		<div class="bg-white p-5">
			<div class="pb-3">
				<p class="font-bold">Universitas</p>
				<p>Universitas Islam Indonesia Yogyakarta</p>
			</div>
			<a href="https://laponid.com/" class="hover:underline">
				<p class="font-bold">Email</p>
				<p>yogadakwah@gmail.com</p>
			</a>
			<a href="https://laponid.com/" class="hover:underline py-3">
				<p class="font-bold">Linkedin</p>
				<p>Yoga Pratama</p>
			</a>
			<a href="https://laponid.com/" class="hover:underline py-3">
				<p class="font-bold">Instagram</p>
				<p>@rvyoug</p>
			</a>
			<a href="https://laponid.com/" class="hover:underline">
				<p class="font-bold">Twitter</p>
				<p>@Yogatama</p>
			</a>
		</div>
	</section>
	<section id="author" class="max-w-[1130px] md:mx-auto mx-3 flex flex-col gap-[30px] mt-[70px]">
		<div>
			<p class="font-bold text-2xl">Jurnal yang Dimiliki:</p>
		</div>
		<div id="content-cards" class="grid md:grid-cols-3 gap-[30px]">
            @forelse($author->news as $news)
			<a href="{{route('front.details', $news->slug)}}" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold uppercase">{{$news->category->name}}</p>
						</div>
						<img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">{{$news->name}}</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">{{$news->created_at->format('M d, Y')}}</p>
					</div>
				</div>
			</a>
            @empty
            <p>Belum ada artikel yang ditulis</p>
            @endforelse
			
		</div>
	</section>
	<section class="max-w-[1130px] md:mx-auto mx-3 mt-[70px]">
		<p class="font-bold text-2xl">Rekomendasi Jurnal dari Penulis Lain:</p>
		<div id="content-cards" class="grid md:grid-cols-3 gap-[30px]">
            @forelse($author->news as $news)
			<a href="{{route('front.details', $news->slug)}}" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold uppercase">{{$news->category->name}}</p>
						</div>
						<img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">{{$news->name}}</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">{{$news->created_at->format('M d, Y')}}</p>
					</div>
				</div>
			</a>
            @empty
            <p>Belum ada artikel yang ditulis</p>
            @endforelse
			
		</div>
	</section>
	<section class="max-w-[1130px] md:mx-auto mx-3 mt-[70px]">
		<p class="font-bold text-2xl">Jurnal Terkait:</p>
		<div id="content-cards" class="grid md:grid-cols-3 gap-[30px]">
            @forelse($author->news as $news)
			<a href="{{route('front.details', $news->slug)}}" class="card">
				<div
					class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#FF6B18] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div
							class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold uppercase">{{$news->category->name}}</p>
						</div>
						<img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">{{$news->name}}</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">{{$news->created_at->format('M d, Y')}}</p>
					</div>
				</div>
			</a>
            @empty
            <p>Belum ada artikel yang ditulis</p>
            @endforelse
			
		</div>
	</section>
	<section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-[70px]">
		<div class="flex flex-col gap-3 shrink-0 w-fit">
			<a href="{{$bannerads->link}}">
				<div class="w-[900px] h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
					<img src="{{Storage::url($bannerads->thumbnail)}}" class="object-cover w-full h-full" alt="ads" />
				</div>
			</a>
			<p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
				Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
						src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
			</p>
		</div>
	</section>
	<x-footer />
</body>

</html>