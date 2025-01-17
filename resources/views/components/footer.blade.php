<footer class="bg-white pt-20 pb-20">
    <div class="flex gap-5 px-20">
        <div>
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/pku-logo.png') }}" alt="logo" />
            </a>
            <p class="my-3">Clarity gives you the blocks and components you need to create a truly professional website.</p>
            <ul class="font-thin  pl-2 flex gap-5 text-black">
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Linkedin</li>
                <li>Twitter</li>
            </ul>
        </div>
        <div>
            <h2 class="font-bold text-xl text-[#2563EB]">Navigasi</h2>
            <ul class=" font-thin ">
                <li><a href="{{ route('front.index') }}" class="hover:underline">Beranda</a></li>
                <li>Jurnal Kategori</li>
                <li>Penulis & universitas</li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-xl text-[#2563EB]">Jurnal Terbaru</h3>
            <ul class=" font-thin ">
                <li>Pentingnya Literasi Digital bagi ulama Muda di Era Modern</li>
                <li>Dampak Ekonomi Syariah terhadap Pertumbuhan UMKM di Indonesia</li>
                <li>Perkembangan Bank Syariah di Indonesia Pasca Pandemi</li>
            </ul>

        </div>
        <div>
            <h2 class="font-bold text-xl text-[#2563EB]">Kontak Kami</h2>
            <ul class=" ">
                <li><span class="font-bold">Alamat: </span>Masjid Istiqlal, Jl.Taman Wijaya Kusuma, Jakarta Pusat,
                    Indonesia</li>
                <li><span class="font-bold">Email: </span>info@pkumi.ac.id</li>
                <li><span class="font-bold">Telepon: </span>+62 21 1234567</li>
            </ul>
        </div>
    </div>
    {{-- <hr class="md:mx-16 mx-10">
    <div class="md:flex justify-between items-center py-5 px-20 md:mx-20">
        <div class="logo-container flex gap-[30px] items-center">
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/pku-logo.png') }}" alt="logo" />
            </a>
        </div>
        <div>
            <p>© 2024 Pendidikan Kader Ulama Masjid Istiqlal. Semua hak cipta dilindungi.</p>
        </div>
    </div> --}}
</footer>
