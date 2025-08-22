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

                    <!-- Search / Quick Find -->
                    <div
                        class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl p-3 shadow-sm">
                        <form action="/search" method="GET" class="flex flex-col md:flex-row gap-3 md:items-center">
                            <div class="flex-1 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                                </svg>
                                <input name="q" type="search" placeholder="Cari judul, penulis, ISBN…"
                                    class="w-full bg-transparent outline-none placeholder:text-gray-400 text-gray-700 dark:text-gray-100" />
                            </div>
                            <div class="flex gap-2">
                                <select name="kategori"
                                    class="rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800 text-gray-700 dark:text-gray-100">
                                    <option value="">Semua Kategori</option>
                                    <option>Teknologi</option>
                                    <option>Ekonomi</option>
                                    <option>Sastra</option>
                                    <option>Hukum</option>
                                </select>
                                <button type="submit"
                                    class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                    Cari
                                </button>
                            </div>
                        </form>
                        <!-- Quick keywords -->
                        <div class="mt-3 flex flex-wrap gap-2 text-sm">
                            <span class="text-gray-500 dark:text-gray-400">Pintasan:</span>
                            <a href="/search?q=AI"
                                class="px-2 py-1 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200">AI</a>
                            <a href="/search?q=UI%2FUX"
                                class="px-2 py-1 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200">UI/UX</a>
                            <a href="/search?q=Manajemen"
                                class="px-2 py-1 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200">Manajemen</a>
                            <a href="/search?q=Data"
                                class="px-2 py-1 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200">Data</a>
                        </div>
                    </div>

                    <!-- Stats / Counters -->
                    <div x-data="{
                        a: 0,
                        b: 0,
                        c: 0,
                        run() {
                            let t = 900;
                            let s = 300;
                            let p = 120;
                            let i1 = setInterval(() => {
                                if (this.a >= t) return clearInterval(i1);
                                this.a += 30
                            }, 20);
                            let i2 = setInterval(() => {
                                if (this.b >= s) return clearInterval(i2);
                                this.b += 10
                            }, 20);
                            let i3 = setInterval(() => {
                                if (this.c >= p) return clearInterval(i3);
                                this.c += 5
                            }, 20);
                        }
                    }" x-init="run()" class="grid grid-cols-3 gap-4 pt-4">
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800 text-center">
                            <div class="text-2xl font-bold text-blue-700 dark:text-blue-300" x-text="a"></div>
                            <div class="text-xs text-gray-500">Koleksi Buku</div>
                        </div>
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800 text-center">
                            <div class="text-2xl font-bold text-green-700 dark:text-green-300" x-text="b"></div>
                            <div class="text-xs text-gray-500">Anggota Aktif</div>
                        </div>
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800 text-center">
                            <div class="text-2xl font-bold text-purple-700 dark:text-purple-300" x-text="c"></div>
                            <div class="text-xs text-gray-500">Peminjaman Hari Ini</div>
                        </div>
                    </div>
                </div>

                <!-- Carousel (Flowbite) -->
                <div class="lg:pl-6">
                    <div id="home-carousel" class="relative w-full" data-carousel="slide">
                        <div class="relative h-64 md:h-80 overflow-hidden rounded-2xl">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1600"
                                    class="absolute block w-full h-full object-cover" alt="Ruang baca modern" />
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://images.unsplash.com/photo-1544937950-fa07a98d237f?q=80&w=1600"
                                    class="absolute block w-full h-full object-cover" alt="Rak buku" />
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://images.unsplash.com/photo-1519682577862-22b62b24e493?q=80&w=1600"
                                    class="absolute block w-full h-full object-cover" alt="Mahasiswa belajar" />
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

    <!-- QUICK NAV CARDS -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <a href="/"
                    class="group rounded-2xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-gray-800 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Beranda</h3>
                            <p class="text-sm text-gray-500">Kembali ke halaman utama</p>
                        </div>
                        <div
                            class="p-2 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-100 dark:bg-blue-900/30 dark:text-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="/profil"
                    class="group rounded-2xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-gray-800 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Profil</h3>
                            <p class="text-sm text-gray-500">Tentang perpustakaan</p>
                        </div>
                        <div
                            class="p-2 rounded-xl bg-emerald-50 text-emerald-600 group-hover:bg-emerald-100 dark:bg-emerald-900/30 dark:text-emerald-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="/layanan"
                    class="group rounded-2xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-gray-800 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Layanan</h3>
                            <p class="text-sm text-gray-500">Peminjaman, referensi, konsultasi</p>
                        </div>
                        <div
                            class="p-2 rounded-xl bg-amber-50 text-amber-600 group-hover:bg-amber-100 dark:bg-amber-900/30 dark:text-amber-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>
                </a>
                <a href="/aktifitas"
                    class="group rounded-2xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-gray-800 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Aktifitas</h3>
                            <p class="text-sm text-gray-500">Agenda & pengumuman</p>
                        </div>
                        <div
                            class="p-2 rounded-xl bg-fuchsia-50 text-fuchsia-600 group-hover:bg-fuchsia-100 dark:bg-fuchsia-900/30 dark:text-fuchsia-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3M12 22a10 10 0 110-20 10 10 0 010 20z" />
                            </svg>
                        </div>
                    </div>
                </a>
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
                <!-- Card -->
                <a href="#"
                    class="min-w-[240px] snap-start rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 hover:shadow-md transition">
                    <div class="aspect-[3/4] rounded-lg bg-gray-100 dark:bg-gray-700 mb-3 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1524578284144-d2958b59b39a?q=80&w=1200"
                            alt="Book" />
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Clean Architecture</h3>
                        <p class="text-sm text-gray-500">Robert C. Martin</p>
                    </div>
                </a>
                <a href="#"
                    class="min-w-[240px] snap-start rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 hover:shadow-md transition">
                    <div class="aspect-[3/4] rounded-lg bg-gray-100 dark:bg-gray-700 mb-3 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?q=80&w=1200"
                            alt="Book" />
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Designing Data-Intensive Apps</h3>
                        <p class="text-sm text-gray-500">Martin Kleppmann</p>
                    </div>
                </a>
                <a href="#"
                    class="min-w-[240px] snap-start rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 hover:shadow-md transition">
                    <div class="aspect-[3/4] rounded-lg bg-gray-100 dark:bg-gray-700 mb-3 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=1200"
                            alt="Book" />
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-semibold text-gray-900 dark:text-white">Refactoring</h3>
                        <p class="text-sm text-gray-500">Martin Fowler</p>
                    </div>
                </a>
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

    <!-- FOOTER CALL-TO-ACTION -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div
                class="rounded-2xl border border-gray-200 dark:border-gray-700 p-6 md:p-8 bg-white dark:bg-gray-800 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ingin update koleksi terbaru?</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Berlangganan newsletter kami untuk rekomendasi
                        buku pilihan.</p>
                </div>
                <form action="/subscribe" method="POST" class="w-full md:w-auto flex gap-2">
                    <input type="email" name="email" placeholder="Email Anda"
                        class="flex-1 md:w-80 rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                        required>
                    <button
                        class="px-4 py-2 rounded-lg bg-gray-900 text-white hover:bg-gray-800 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100">Langganan</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
