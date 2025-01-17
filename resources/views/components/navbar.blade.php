<nav id="Navbar" class="w-max my-10 mx-auto px-5 py-2 flex justify-between items-center rounded-lg h-max">
    <div class="logo-container flex gap-[30px] items-center">
        <a href="{{ route('front.index') }}" class="flex shrink-0">
            <img src="{{ asset('assets/images/logos/pku-logo.png') }}" alt="logo" />
        </a>
    </div>

    <!-- Burger Button (hidden on large screens, visible on mobile) -->
    <button id="burger-button" class="md:hidden flex flex-col gap-1">
        <span class="block w-6 h-0.5 bg-[#1A143C]"></span>
        <span class="block w-6 h-0.5 bg-[#1A143C]"></span>
        <span class="block w-6 h-0.5 bg-[#1A143C]"></span>
    </button>

    <!-- Navigation Links (hidden on mobile, shown on larger screens) -->
    <div id="menu" class="hidden md:flex md:gap-[30px] items-center">
        <a href="{{ route('front.index') }}" class="text-white font-bold hover:underline">Beranda</a>

        <p class="text-white font-bold">Berita</p>

        <p class="text-white font-bold">Tentang PKU</p>
        <p class="text-white font-bold">Akademik</p>
        <p class="text-white font-bold">Penelitian</p>
        <p class="text-white font-bold">Galeri</p>
        <p class="text-white font-bold">Kontak Kami</p>
        <p class="text-white font-bold">Siakad PKU</p>
        <div class="flex gap-2">
            <img src="" alt="avatar">
            <p class="text-white font-bold">Behzad</p>
        </div>
        <svg width="49" height="73" viewBox="0 0 49 73" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30.0249 27C31.0405 27 31.8999 27.8594 31.8999 28.875V45.75C31.8999 46.7266 30.8452 47.3125 29.9858 46.8438L24.3999 43.5625L18.7749 46.8438C17.9155 47.3125 16.8999 46.7266 16.8999 45.75V28.875C16.8999 27.8594 17.7202 27 18.7749 27H30.0249ZM30.0249 44.6562V29.1094C30.0249 28.9922 29.9077 28.875 29.7515 28.875H18.9702C18.853 28.875 18.7749 28.9922 18.7749 29.1094V44.6562L24.3999 41.375L30.0249 44.6562Z" fill="white"/>
        </svg>
            
        {{-- <form method="GET" action="{{ route('front.search') }}"
            class="w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
            @csrf --}}
            <button type="submit" class="w-5 h-5 flex shrink-0">
                <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon" />
            </button>
            {{-- <input type="text" name="keyword" id=""
                class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
                placeholder="Cari artikel atau berita..." />
        </form> --}}
    </div>
</nav>

<!-- Mobile Menu (Initially hidden) -->
<div id="mobile-menu"
    class="md:hidden fixed inset-0 h-max sticky top-0 bg-white p-5 hidden opacity-0 transform -translate-y-5 transition-all duration-300 z-[9999]">
    <!-- Close Button ("X") -->
    <button id="close-button" class="text-[#1A143C] text-2xl font-bold mb-5">
        &times; <!-- This is the "X" symbol -->
    </button>

    <div class="flex flex-col items-start gap-4">
        <a href="{{ route('front.index') }}" class="text-[#1A143C] font-bold">Beranda</a>
        <a class="text-[#1A143C] font-bold">Jurnal Kategori</a>
        <p class="text-[#1A143C] font-bold">Penulis</p>
        {{-- <p class="text-[#1A143C] font-bold">Universitas</p> --}}
        <form method="GET" action="{{ route('front.search') }}"
            class="w-full flex items-center rounded-full border border-[#E8EBF4] p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
            @csrf
            <button type="submit" class="w-5 h-5 flex shrink-0">
                <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon" />
            </button>
            <input type="text" name="keyword" id=""
                class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
                placeholder="Cari artikel atau berita..." />
        </form>
    </div>
</div>


<script>
    const burgerButton = document.getElementById('burger-button');
    const closeButton = document.getElementById('close-button');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle the mobile menu when burger button is clicked
    burgerButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden'); // Show/hide the element

        setTimeout(() => {
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('opacity-0', '-translate-y-5');
                mobileMenu.classList.add('opacity-100', 'translate-y-0');
            } else {
                mobileMenu.classList.add('opacity-0', '-translate-y-5');
                mobileMenu.classList.remove('opacity-100', 'translate-y-0');
            }
        }, 10); // Slight delay to ensure transition applies correctly
    });

    // Close the mobile menu when close ("X") button is clicked
    closeButton.addEventListener('click', () => {
        mobileMenu.classList.add('opacity-0', '-translate-y-5');
        mobileMenu.classList.remove('opacity-100', 'translate-y-0');

        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300); // Wait for the transition to finish before hiding the element
    });
</script>
