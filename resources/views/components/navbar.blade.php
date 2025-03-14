@props(['categories' => collect()]) {{-- Default ke koleksi kosong jika tidak ada data --}}


<nav id="Navbar" class="w-max my-10 mx-auto px-5 py-2 flex justify-between items-center bg-white rounded-lg h-max">
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

    <!-- Navigation Links -->
    <div id="menu" class="hidden md:flex md:gap-[30px] items-center">
        <a href="{{ route('front.index') }}" class="text-[#1A143C] font-bold hover:underline">Beranda</a>

        <!-- Dropdown Jurnal Kategori (Desktop) -->
        <div class="relative">
            <button id="category-btn" class="text-[#1A143C] font-bold flex items-center gap-2">
                Jurnal Kategori
                <span id="category-arrow" class="w-2 h-2 border-r-2 border-b-2 border-[#1A143C] transform rotate-45 transition-all"></span>
            </button>
            <div id="category-dropdown"
                class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden z-50">
                @foreach ($categories as $category)
                    <a href="{{ route('front.category', $category->slug) }}"
                        class="block px-4 py-2 text-sm text-[#1A143C] hover:bg-gray-100">
                        {{ $category->name ?? 'Kategori Tidak Ditemukan' }}
                    </a>
                @endforeach
            </div>
        </div>

        <form method="GET" action="{{ route('front.search') }}"
            class="w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#FF6B18] transition-all duration-300">
            @csrf
            <button type="submit" class="w-5 h-5 flex shrink-0">
                <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon" />
            </button>
            <input type="text" name="keyword"
                class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
                placeholder="Cari artikel atau berita..." />
        </form>
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

         <!-- Dropdown Category -->
         <div class="w-full">
            <button id="category-toggle" class="w-full text-left font-bold text-[#1A143C] flex justify-between items-center">
                Jurnal Kategori
                <span id="category-icon">+</span>
            </button>
            <div id="category-list" class="hidden flex flex-col gap-2 mt-2 pl-4">
                @foreach ($categories as $category)
                    <a href="{{ route('front.category', $category->slug) }}" class="text-[#1A143C]">
                        {{ $category->name ?? 'Kategori Tidak Ditemukan' }}
                    </a>
                @endforeach
            </div>
        </div>

        {{-- <a class="text-[#1A143C] font-bold">Jurnal Kategori</a>
        <p class="text-[#1A143C] font-bold">Penulis</p> --}}
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
    const categoryToggle = document.getElementById("category-toggle");
    const categoryList = document.getElementById("category-list");
    const categoryIcon = document.getElementById("category-icon");

    const categoryBtn = document.getElementById("category-btn");
    const categoryDropdown = document.getElementById("category-dropdown");
    const categoryArrow = document.getElementById("category-arrow");

     // Toggle dropdown kategori (Desktop)
     categoryBtn.addEventListener("click", (event) => {
        event.stopPropagation();
        categoryDropdown.classList.toggle("hidden");
        categoryArrow.classList.toggle("rotate-180");
    });

    // Close dropdown when clicking outside (Desktop)
    document.addEventListener("click", (event) => {
        if (!categoryDropdown.contains(event.target) && !categoryBtn.contains(event.target)) {
            categoryDropdown.classList.add("hidden");
            categoryArrow.classList.remove("rotate-180");
        }
    });

    categoryToggle.addEventListener("click", () => {
        categoryList.classList.toggle("hidden");
        categoryIcon.textContent = categoryList.classList.contains("hidden") ? "+" : "-";
    });

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
