<x-layout>
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Buku Baru</h1>
                <p class="text-gray-700 dark:text-gray-300">Rekomendasi buku-buku terbaru yang tersedia di perpustakaan.
                </p>
            </div>
            <div class="flex items-center gap-2">
                <a href="#"
                    class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">Lihat
                    Semua Koleksi</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Ajukan
                    Pembelian</a>
            </div>
        </div>
    </section>

    <!-- FEATURED CAROUSEL (Flowbite) -->
    <section class="container mx-auto px-4 pt-6">
        <div id="bookCarousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 md:h-72 overflow-hidden rounded-2xl">
                <!-- Slide 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1600"
                        class="absolute block w-full h-full object-cover" alt="featured-1">
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <span class="inline-block text-xs px-2 py-1 rounded bg-blue-600 w-max">Teknologi</span>
                        <h3 class="text-2xl font-semibold mt-2">Clean Architecture untuk Web Modern</h3>
                        <p class="text-sm text-white/90">Panduan praktik arsitektur perangkat lunak yang mudah dirawat.
                        </p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1519337265831-281ec6cc8514?q=80&w=1600"
                        class="absolute block w-full h-full object-cover" alt="featured-2">
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <span class="inline-block text-xs px-2 py-1 rounded bg-emerald-600 w-max">Manajemen</span>
                        <h3 class="text-2xl font-semibold mt-2">Project Management Essentials</h3>
                        <p class="text-sm text-white/90">Teknik agile & scrum untuk tim kampus dan komunitas riset.</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?q=80&w=1600"
                        class="absolute block w-full h-full object-cover" alt="featured-3">
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <span class="inline-block text-xs px-2 py-1 rounded bg-fuchsia-600 w-max">Sastra</span>
                        <h3 class="text-2xl font-semibold mt-2">Antologi Cerita Pendek Nusantara</h3>
                        <p class="text-sm text-white/90">Kumpulan cerpen pilihan penulis muda Indonesia.</p>
                    </div>
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/80 group-hover:bg-white">
                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/80 group-hover:bg-white">
                    <svg class="w-4 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <!-- FILTERS -->
    <section class="container mx-auto px-4 pt-6">
        <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
            <form action="#" method="GET" class="grid grid-cols-1 md:grid-cols-5 gap-3">
                <div
                    class="md:col-span-2 flex items-center gap-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                    <input name="q" type="search" placeholder="Cari judul, penulis, atau ISBN…"
                        class="w-full bg-transparent outline-none placeholder:text-gray-400" />
                </div>
                <select class="rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <option>Kategori</option>
                    <option>Teknologi</option>
                    <option>Manajemen</option>
                    <option>Sastra</option>
                    <option>Ilmu Sosial</option>
                </select>
                <select class="rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <option>Format</option>
                    <option>Fisik</option>
                    <option>e-Book</option>
                </select>
                <select class="rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <option>Urutkan</option>
                    <option>Terbaru</option>
                    <option>Terpopuler</option>
                    <option>Rating Tertinggi</option>
                </select>
            </form>
        </div>
    </section>

    <!-- BOOKS GRID -->
    <section class="container mx-auto px-4 py-8" x-data="booksUI()" x-init="init()">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1543002588-bfa74002ed7e?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-1">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★★<span
                            class="text-xs text-gray-500 ms-1">(4.9)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Pragmatic Programmer (Edisi Baru)</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Andrew Hunt, David Thomas · 2023</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Teknologi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (3)</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Pragmatic Programmer (Edisi Baru)',author:'Andrew Hunt, David Thomas',year:'2023',isbn:'978-0135957059',call:'005.1 HUN p',category:'Teknologi',format:'Fisik',rating:'4.9',image:'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?q=80&w=1200',synopsis:'Edisi terbaru dari buku klasik pengembangan perangkat lunak dengan praktik modern, tips pragmatis, dan pola kerja kolaboratif.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Pinjam</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1524578271613-d550eacf6090?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-2">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.4)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Data Science Handbook</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Jake VanderPlas · 2024</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Teknologi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">e‑Book</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Akses Online</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Data Science Handbook',author:'Jake VanderPlas',year:'2024',isbn:'978-1491912058',call:'006.3 VAN d',category:'Teknologi',format:'e‑Book',rating:'4.4',image:'https://images.unsplash.com/photo-1524578271613-d550eacf6090?q=80&w=1200',synopsis:'Panduan menyeluruh tentang sains data: statistik, visualisasi, dan workflow Python.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Baca</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-3">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★★<span
                            class="text-xs text-gray-500 ms-1">(4.8)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Psikologi Belajar Modern</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Albert Bandura · 2022</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-purple-50 text-purple-700">Ilmu Sosial</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-amber-100 text-amber-700">Dipinjam (kembali: 28
                            Agu)</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Psikologi Belajar Modern',author:'Albert Bandura',year:'2022',isbn:'978-0321049124',call:'150 BAN p',category:'Ilmu Sosial',format:'Fisik',rating:'4.8',image:'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?q=80&w=1200',synopsis:'Konsep pembelajaran sosial-kognitif dan penerapannya pada pendidikan modern.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Antri</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 4 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1471107340929-a87cd0f5b5f3?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-4">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.3)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Ekonomi Kreatif Indonesia</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Henky Kundrat · 2024</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-emerald-50 text-emerald-700">Manajemen</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (5)</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Ekonomi Kreatif Indonesia',author:'Henky Kundrat',year:'2024',isbn:'978-6026208320',call:'338.7 KUN e',category:'Manajemen',format:'Fisik',rating:'4.3',image:'https://images.unsplash.com/photo-1471107340929-a87cd0f5b5f3?q=80&w=1200',synopsis:'Ringkasan ekosistem ekonomi kreatif nasional dan strategi pengembangannya.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Pinjam</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 5 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-5">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★★<span
                            class="text-xs text-gray-500 ms-1">(4.7)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Seni Bercerita: Antologi Nusantara
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Kurator: R. Pramudya · 2025</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-fuchsia-50 text-fuchsia-700">Sastra</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (2)</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Seni Bercerita: Antologi Nusantara',author:'R. Pramudya (Kurator)',year:'2025',isbn:'978-6021234567',call:'899 SEN s',category:'Sastra',format:'Fisik',rating:'4.7',image:'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?q=80&w=1200',synopsis:'Kumpulan cerpen dan esai singkat dari berbagai daerah, mengeksplorasi tradisi dan budaya.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Pinjam</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 6 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1526318472351-c75fcf070305?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-6">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.5)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Desain UI Modern dengan Tailwind</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">A. Fikri · 2025</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Teknologi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">e‑Book</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Akses Online</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Desain UI Modern dengan Tailwind',author:'A. Fikri',year:'2025',isbn:'978-9791234567',call:'005.4 FIK d',category:'Teknologi',format:'e‑Book',rating:'4.5',image:'https://images.unsplash.com/photo-1526318472351-c75fcf070305?q=80&w=1200',synopsis:'Panduan komprehensif membangun antarmuka modern dengan Tailwind CSS dan komponen.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Baca</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 7 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1473755504818-b72b6dfdc226?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-7">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.2)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Metodologi Penelitian Terapan</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Sugiyono · 2024</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-purple-50 text-purple-700">Ilmu Sosial</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (4)</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Metodologi Penelitian Terapan',author:'Sugiyono',year:'2024',isbn:'978-6022987457',call:'001.4 SUG m',category:'Ilmu Sosial',format:'Fisik',rating:'4.2',image:'https://images.unsplash.com/photo-1473755504818-b72b6dfdc226?q=80&w=1200',synopsis:'Pendekatan penelitian kualitatif dan kuantitatif dengan studi kasus terapan.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Pinjam</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 8 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-8">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★★<span
                            class="text-xs text-gray-500 ms-1">(4.8)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Matematika Diskrit untuk Komputer</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Kenneth Rosen · 2023</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Teknologi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (1)</span>
                        <div class="flex gap-2">
                            <button
                                @click="openBook({title:'Matematika Diskrit untuk Komputer',author:'Kenneth Rosen',year:'2023',isbn:'978-0073383095',call:'511 ROS m',category:'Teknologi',format:'Fisik',rating:'4.8',image:'https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1200',synopsis:'Dasar-dasar matematika diskrit untuk ilmu komputer: logika, kombinatorika, graf, probabilitas.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Pinjam</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- PAGINATION (static) -->
        <div class="mt-8 flex items-center justify-center gap-2">
            <a href="#"
                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Prev</a>
            <a href="#" class="px-3 py-2 rounded-lg bg-blue-600 text-white">1</a>
            <a href="#"
                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">2</a>
            <a href="#"
                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">3</a>
            <a href="#"
                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Next</a>
        </div>

        <!-- MODAL: Book Detail (Alpine) -->
        <div x-show="show" x-transition.opacity
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4" style="display:none">
            <div @click.outside="show=false"
                class="w-full max-w-3xl rounded-2xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-lg overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="md:col-span-1 h-56 md:h-full bg-gray-100 dark:bg-gray-700"><img :src="current.image"
                            alt="cover" class="w-full h-full object-cover"></div>
                    <div class="md:col-span-2 p-6">
                        <div class="text-xs text-gray-500" x-text="current.category + ' • ' + current.format"></div>
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white" x-text="current.title"></h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300"
                            x-text="current.author + ' · ' + current.year"></p>
                        <div class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                            <div><strong>ISBN:</strong> <span x-text="current.isbn"></span></div>
                            <div><strong>No. Panggil:</strong> <span x-text="current.call"></span></div>
                            <div><strong>Rating:</strong> <span x-text="current.rating"></span></div>
                        </div>
                        <p class="mt-3 text-gray-700 dark:text-gray-200" x-text="current.synopsis"></p>
                        <div class="mt-5 flex items-center justify-end gap-2">
                            <a href="#"
                                class="px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Tambah
                                ke Daftar</a>
                            <button @click="show=false"
                                class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRIPT: Alpine (hapus jika sudah ada di layout) -->
    <script>
        function booksUI() {
            return {
                show: false,
                current: {
                    title: '',
                    author: '',
                    year: '',
                    isbn: '',
                    call: '',
                    category: '',
                    format: '',
                    rating: '',
                    image: '',
                    synopsis: ''
                },
                init() {},
                openBook(data) {
                    this.current = data;
                    this.show = true;
                }
            }
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-layout>
