<a href="{{ $url }}" class="block">
    <div class="relative bg-[#007AFF] rounded-lg p-3 hover:shadow-lg transition duration-300">
        <img src="{{ asset($image) }}" alt="thumbnail" class="w-full h-40 object-cover rounded-t-lg">
        <p class="absolute right-0 top-0 bg-white mx-2 my-2 px-2 py-1 rounded-lg">{{ $category }}</p>
        <p class="text-white px-5 py-2">{{ $title }}</p>
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle cx="24" cy="24" r="24" fill="#007AFF" />
            <path d="M15 22.75C14.3096 22.75 13.75 23.3096 13.75 24C13.75 24.6904 14.3096 25.25 15 25.25V22.75ZM33.8839 24.8839C34.372 24.3957 34.372 23.6043 33.8839 23.1161L25.9289 15.1612C25.4408 14.673 24.6493 14.673 24.1612 15.1612C23.673 15.6493 23.673 16.4408 24.1612 16.9289L31.2322 24L24.1612 31.0711C23.673 31.5592 23.673 32.3507 24.1612 32.8388C24.6493 33.327 25.4408 33.327 25.9289 32.8388L33.8839 24.8839ZM15 25.25H33V22.75H15V25.25Z" fill="white" />
        </svg>
    </div>
</a>
