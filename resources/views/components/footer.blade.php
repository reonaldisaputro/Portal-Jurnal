<footer class="bg-[#1A143C] text-white mt-10 pt-20">
    <div class="grid md:grid-cols-3 gap-5 mb-5 px-20">
        <div>
            <h2 class="font-bold text-xl">Tentang PKU-MI</h2>
            <p class="my-3">Pendidikan Kader Ulama Masjid Istiqlal (PKU-MI) adalah platform akademik yang menghimpun
                jurnal dan karya ilmiah dari mahasiswa di seluruh Indonesia. Kami berkomitmen untuk menjadi pusat
                rujukan ilmu pengetahuan dan kajian Islam, sekaligus memajukan dakwah digital di era modern.</p>
            <p class="font-bold text-xl">Ikuti Kami</p>
            <p>Terhubung dengan kami di media sosial untuk mendapatkan update terbaru:</p>
            <ul class="list-disc text-white ml-5 pl-5">
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Linkedin</li>
                <li>Twitter</li>
            </ul>
        </div>
        <div>
            <h2 class="font-bold text-xl">Navigasi</h2>
            <ul class="list-disc text-white ml-5 pl-5">
                <li><a href="{{ route('front.index') }}" class="hover:underline">Beranda</a></li>
                <li>Jurnal Kategori</li>
                <li>Penulis & universitas</li>
            </ul>
            <h3 class="font-bold mt-5 text-xl">Jurnal Terbaru</h3>
            <ul class="list-disc text-white ml-5 pl-5">
                <li>Pentingnya Literasi Digital bagi ulama Muda di Era Modern</li>
                <li>Dampak Ekonomi Syariah terhadap Pertumbuhan UMKM di Indonesia</li>
                <li>Perkembangan Bank Syariah di Indonesia Pasca Pandemi</li>
            </ul>
        </div>
        <div>
            <h2 class="font-bold text-xl">Kontak Kami</h2>
            <ul class="list-disc ml-5 pl-5">
                <li><span class="font-bold">Alamat: </span>Masjid Istiqlal, Jl.Taman Wijaya Kusuma, Jakarta Pusat,
                    Indonesia</li>
                <li><span class="font-bold">Email: </span>info@pkumi.ac.id</li>
                <li><span class="font-bold">Telepon: </span>+62 21 1234567</li>
            </ul>
        </div>
    </div>
    <hr class="md:mx-16 mx-10">
    <div class="md:flex justify-between items-center py-5 px-20 md:mx-20">
        <div class="logo-container flex gap-[30px] items-center">
            <a href="{{ route('front.index') }}" class="flex shrink-0">
                <img src="{{ asset('assets/images/logos/pku-logo.png') }}" alt="logo" />
            </a>
        </div>
        <div>
            <p>© 2024 Pendidikan Kader Ulama Masjid Istiqlal. Semua hak cipta dilindungi.</p>
        </div>
    </div>
</footer>
