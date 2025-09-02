<x-layout>
    <!-- HERO -->
    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-blue-50 via-white to-white dark:from-blue-900/20 dark:via-gray-900 dark:to-gray-900">
        </div>
        <div class="relative container mx-auto px-4 pt-4 pb-12 md:pt-8 md:pb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="space-y-6">
                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-3 py-1 text-sm text-blue-700 dark:border-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2-1.343-2-3-2z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 12c0-4.418 3.582-8 8-8s8 3.582 8 8M6 20h12" />
                        </svg>
                        Perpustakaan Digital Kampus
                    </span>
                    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        Pusat Literasi, Riset, dan Kolaborasi Akademik
                    </h1>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl">
                        Melayani literasi, edukasi, dan pengembangan pengetahuan untuk seluruh civitas akademika.
                        Telusuri koleksi, kelola peminjaman, dan temukan rekomendasi buku terbaik.
                    </p>

                    <!-- Stats / Counters -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4">
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800 text-center">
                            <div class="text-2xl font-bold text-blue-700 dark:text-blue-300">
                                {{ $statistik['buku'] ?? '...' }}
                            </div>
                            <div class="text-xs text-gray-500">Total Buku</div>
                        </div>
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800 text-center">
                            <div class="text-2xl font-bold text-green-700 dark:text-green-300">
                                {{ $statistik['anggota'] ?? '...' }}
                            </div>
                            <div class="text-xs text-gray-500">Total Anggota</div>
                        </div>
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800 text-center">
                            <div class="text-2xl font-bold text-purple-700 dark:text-purple-300">
                                {{ $statistik['peminjaman'] ?? '...' }}
                            </div>
                            <div class="text-xs text-gray-500">Total Pinjaman</div>
                        </div>
                    </div>
                </div>

                <!-- Carousel (Flowbite) -->
                <div class="lg:pl-6">
                    <div id="home-carousel" class="relative w-full" data-carousel="slide">
                        <div class="relative h-64 md:h-80 overflow-hidden rounded-2xl">
                            <!-- 1. Reading room (active) -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=1600"
                                    alt="Ruang baca perpustakaan yang tenang"
                                    class="absolute block w-full h-full object-cover" loading="eager" />
                            </div>

                            <!-- 2. Deretan rak buku tinggi -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1600"
                                    alt="Deretan rak buku perpustakaan"
                                    class="absolute block w-full h-full object-cover" loading="lazy" />
                            </div>

                            <!-- 3. Mahasiswa belajar di meja panjang -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1519682577862-22b62b24e493?q=80&w=1600"
                                    alt="Mahasiswa belajar di perpustakaan"
                                    class="absolute block w-full h-full object-cover" loading="lazy" />
                            </div>

                            <!-- 4. Close-up buku terbuka -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1457694587812-e8bf29a43845?q=80&w=1600"
                                    alt="Buku terbuka di atas meja" class="absolute block w-full h-full object-cover"
                                    loading="lazy" />
                            </div>

                            <!-- 5. Anak membaca di sudut perpustakaan -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1600"
                                    alt="Anak membaca buku di perpustakaan"
                                    class="absolute block w-full h-full object-cover" loading="lazy" />
                            </div>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/70 group-hover:bg-white dark:bg-gray-800/70 dark:group-hover:bg-gray-800">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Sebelumnya</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/70 group-hover:bg-white dark:bg-gray-800/70 dark:group-hover:bg-gray-800">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Berikutnya</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AKSES CEPAT FITUR UTAMA -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <!-- Kartu Koleksi Buku -->
                <div class="rounded-2xl border border-blue-200 dark:border-blue-700 p-5 bg-white dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="{{ route('koleksi.buku') }}"
                                class="font-semibold text-blue-700 dark:text-blue-300 hover:underline">
                                Koleksi Buku
                            </a>
                            <p class="text-sm text-gray-500">Lihat semua koleksi buku</p>
                        </div>
                        <a href="{{ route('koleksi.buku') }}"
                            class="p-2 rounded-xl bg-blue-50 text-blue-600 hover:bg-blue-100 hover:shadow-md
                    dark:bg-blue-900/30 dark:text-blue-300 dark:hover:bg-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kartu Peminjaman -->
                <div class="rounded-2xl border border-green-200 dark:border-green-700 p-5 bg-white dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="/peminjaman"
                                class="font-semibold text-green-700 dark:text-green-300 hover:underline">
                                Peminjaman
                            </a>
                            <p class="text-sm text-gray-500">Ajukan & kelola peminjaman buku</p>
                        </div>
                        <a href="/peminjaman"
                            class="p-2 rounded-xl bg-green-50 text-green-600 hover:bg-green-100 hover:shadow-md
                    dark:bg-green-900/30 dark:text-green-300 dark:hover:bg-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kartu Riwayat -->
                <div class="rounded-2xl border border-purple-200 dark:border-purple-700 p-5 bg-white dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="/riwayat"
                                class="font-semibold text-purple-700 dark:text-purple-300 hover:underline">
                                Riwayat
                            </a>
                            <p class="text-sm text-gray-500">Lihat riwayat peminjaman & denda</p>
                        </div>
                        <a href="/riwayat"
                            class="p-2 rounded-xl bg-purple-50 text-purple-600 hover:bg-purple-100 hover:shadow-md
                    dark:bg-purple-900/30 dark:text-purple-300 dark:hover:bg-purple-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3M12 22a10 10 0 110-20 10 10 0 010 20z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kartu Profil -->
                <div
                    class="rounded-2xl border border-emerald-200 dark:border-emerald-700 p-5 bg-white dark:bg-gray-800">
                    <div class="flex items-center justify-between">
                        <div>
                            <a href="/profil"
                                class="font-semibold text-emerald-700 dark:text-emerald-300 hover:underline">
                                Profil Anggota
                            </a>
                            <p class="text-sm text-gray-500">Kelola data & status keanggotaan</p>
                        </div>
                        <a href="/profil"
                            class="p-2 rounded-xl bg-emerald-50 text-emerald-600 hover:bg-emerald-100 hover:shadow-md
                    dark:bg-emerald-900/30 dark:text-emerald-300 dark:hover:bg-emerald-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FEATURE: Layanan singkat -->
    <section class="py-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-2xl font-semibold text-blue-700 dark:text-blue-300 mb-3">Layanan</h2>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-gray-700 dark:text-gray-200">
                        <li class="flex items-center gap-2"><span
                                class="w-2 h-2 rounded-full bg-blue-400"></span>Peminjaman & Pengembalian Buku</li>
                        <li class="flex items-center gap-2"><span
                                class="w-2 h-2 rounded-full bg-blue-400"></span>Rekomendasi Buku Baru</li>
                        <li class="flex items-center gap-2"><span
                                class="w-2 h-2 rounded-full bg-blue-400"></span>Layanan Referensi & Konsultasi</li>
                        <li class="flex items-center gap-2"><span
                                class="w-2 h-2 rounded-full bg-blue-400"></span>Agenda Kegiatan Literasi</li>
                    </ul>
                    <div class="mt-4">
                        <a href="/layanan"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">Lihat
                            Semua Layanan
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow border border-gray-200 dark:border-gray-700 p-6">
                    <h2 class="text-2xl font-semibold text-emerald-700 dark:text-emerald-300 mb-3">Aktifitas Terbaru
                    </h2>
                    <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">
                        <li class="mb-6 ms-6">
                            <span
                                class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900"><span
                                    class="h-2 w-2 rounded-full bg-emerald-600"></span></span>
                            <h3 class="font-medium text-gray-900 dark:text-white">Workshop Literasi Informasi</h3>
                            <time class="text-sm text-gray-500">22 Agustus 2025</time>
                        </li>
                        <li class="mb-6 ms-6">
                            <span
                                class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900"><span
                                    class="h-2 w-2 rounded-full bg-emerald-600"></span></span>
                            <h3 class="font-medium text-gray-900 dark:text-white">Pengumuman: Jam Buka Perpustakaan
                            </h3>
                            <time class="text-sm text-gray-500">20 Agustus 2025</time>
                        </li>
                        <li class="ms-6">
                            <span
                                class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900"><span
                                    class="h-2 w-2 rounded-full bg-emerald-600"></span></span>
                            <h3 class="font-medium text-gray-900 dark:text-white">Peluncuran Koleksi Referensi Baru
                            </h3>
                            <time class="text-sm text-gray-500">15 Agustus 2025</time>
                        </li>
                    </ol>
                    <div class="mt-4">
                        <a href="/aktifitas"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 transition">Lihat
                            Semua Aktifitas
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REKOMENDASI (Preview) -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-purple-700 dark:text-purple-300">Rekomendasi Buku</h2>
                <a href="/rekomendasi" class="text-sm text-purple-700 hover:underline dark:text-purple-300">Lihat
                    semua</a>
            </div>
            <div class="flex gap-4 overflow-x-auto pb-2 snap-x">
                @foreach ($bukuRekomendasi as $buku)
                    <a href="#"
                        class="min-w-[240px] snap-start rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 hover:shadow-md transition">
                        <div class="aspect-[3/4] rounded-lg bg-gray-100 dark:bg-gray-700 mb-3 overflow-hidden">
                            <img class="w-full h-full object-cover"
                                src="{{ $buku->foto ?? 'https://source.unsplash.com/featured/?book' }}"
                                alt="{{ $buku->judul }}" />
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-semibold text-gray-900 dark:text-white">{{ $buku->judul }}</h3>
                            <p class="text-sm text-gray-500">{{ $buku->penulis }}</p>
                            <p class="text-xs text-gray-400">Dipinjam {{ $buku->peminjamen_count }}x</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- LAPORAN & CTA -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div
                    class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center mb-3">
                        <svg class="w-8 h-8 text-purple-500 mr-2" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 17a4 4 0 0 0 2 0m-2-4a4 4 0 1 1 8 0c0 2.21-1.79 4-4 4s-4-1.79-4-4z" />
                        </svg>
                        <h2 class="text-xl font-semibold text-purple-600 dark:text-purple-300">Laporan & Statistik</h2>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300">Lihat statistik buku, anggota, dan riwayat denda.</p>
                    <a href="/reports"
                        class="mt-4 inline-block px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 transition">Lihat
                        Laporan</a>
                </div>
                <div class="bg-gradient-to-br from-sky-500 to-blue-600 rounded-2xl text-white p-6">
                    <h3 class="text-xl font-semibold mb-1">Daftar Anggota</h3>
                    <p class="text-sm text-sky-100">Nikmati akses penuh ke koleksi digital dan peminjaman.</p>
                    <a href="/registrasi"
                        class="mt-4 inline-flex items-center gap-2 rounded-lg bg-white/10 px-4 py-2 hover:bg-white/20 transition">
                        Daftar Sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ / Accordion -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Pertanyaan yang Sering
                        Diajukan</h2>
                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button"
                                class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                aria-controls="accordion-flush-body-1">
                                <span>Bagaimana cara menjadi anggota?</span>
                                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-3 text-sm text-gray-600 dark:text-gray-300">Silakan daftar melalui halaman
                                <a href="/registrasi" class="text-blue-600 hover:underline">Registrasi</a> dengan
                                mengisi data diri dan nomor induk.
                            </div>
                        </div>

                        <h2 id="accordion-flush-heading-2">
                            <button type="button"
                                class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                                data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                aria-controls="accordion-flush-body-2">
                                <span>Berapa lama masa peminjaman?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-3 text-sm text-gray-600 dark:text-gray-300">Masa peminjaman standar adalah
                                7–14 hari dan dapat diperpanjang jika tidak ada antrian.</div>
                        </div>

                        <h2 id="accordion-flush-heading-3">
                            <button type="button"
                                class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                                data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                aria-controls="accordion-flush-body-3">
                                <span>Apakah ada denda keterlambatan?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-3 text-sm text-gray-600 dark:text-gray-300">Ada denda harian setelah
                                melewati tanggal jatuh tempo sesuai kebijakan perpustakaan.</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Butuh Bantuan?</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Tim kami siap membantu kebutuhan informasi
                        Anda.</p>
                    <div class="mt-4 flex gap-3">
                        <a href="/layanan"
                            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">Hubungi
                            Pustakawan</a>
                        <a href="/profil"
                            class="px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition">Tentang
                            Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
