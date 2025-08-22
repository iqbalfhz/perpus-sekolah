<x-layout>
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Buku Umum</h1>
                <p class="text-gray-700 dark:text-gray-300">Daftar rekomendasi buku umum yang layak dibaca oleh civitas
                    akademika.</p>
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

    <!-- CATEGORY CHIPS -->
    <section class="container mx-auto px-4 pt-6">
        <div class="flex flex-wrap gap-2">
            <a href="#"
                class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200">Semua</a>
            <a href="#" class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 hover:bg-blue-200">Motivasi</a>
            <a href="#" class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 hover:bg-emerald-200">Sains
                Pop</a>
            <a href="#"
                class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 hover:bg-purple-200">Psikologi</a>
            <a href="#" class="px-3 py-1 rounded-full bg-amber-100 text-amber-700 hover:bg-amber-200">Biografi</a>
            <a href="#" class="px-3 py-1 rounded-full bg-pink-100 text-pink-700 hover:bg-pink-200">Kesehatan</a>
            <a href="#"
                class="px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 hover:bg-indigo-200">Sejarah</a>
            <a href="#" class="px-3 py-1 rounded-full bg-sky-100 text-sky-700 hover:bg-sky-200">Bisnis</a>
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
                    <option>Motivasi</option>
                    <option>Sains Pop</option>
                    <option>Psikologi</option>
                    <option>Biografi</option>
                    <option>Kesehatan</option>
                    <option>Sejarah</option>
                    <option>Bisnis</option>
                </select>
                <select class="rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                    <option>Format</option>
                    <option>Fisik</option>
                    <option>e‑Book</option>
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
    <section class="container mx-auto px-4 py-8" x-data="bookModal()" x-init="init()">
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
                            class="text-xs text-gray-500 ms-1">(4.8)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Atomic Habits</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">James Clear · 2018</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Motivasi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (4)</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Atomic Habits',author:'James Clear',year:'2018',isbn:'978-0735211292',call:'158 CLE a',category:'Motivasi',format:'Fisik',rating:'4.8',image:'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?q=80&w=1200',synopsis:'Strategi membangun kebiasaan kecil yang menghasilkan perubahan besar dan konsisten.'})"
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
                    <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-2">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★★<span
                            class="text-xs text-gray-500 ms-1">(4.7)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Sapiens: Riwayat Singkat Umat Manusia
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Yuval Noah Harari · 2014</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-emerald-50 text-emerald-700">Sains Pop</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (2)</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Sapiens: Riwayat Singkat Umat Manusia',author:'Yuval Noah Harari',year:'2014',isbn:'978-0062316097',call:'909 HAR s',category:'Sains Pop',format:'Fisik',rating:'4.7',image:'https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=1200',synopsis:'Penelusuran sejarah manusia dari pemburu-peramu hingga era modern.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Pinjam</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1473755504818-b72b6dfdc226?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-3">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.5)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Thinking, Fast and Slow</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Daniel Kahneman · 2011</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-purple-50 text-purple-700">Psikologi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-amber-100 text-amber-700">Dipinjam (kembali: 30
                            Agu)</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Thinking, Fast and Slow',author:'Daniel Kahneman',year:'2011',isbn:'978-0374533557',call:'153 KAH t',category:'Psikologi',format:'Fisik',rating:'4.5',image:'https://images.unsplash.com/photo-1473755504818-b72b6dfdc226?q=80&w=1200',synopsis:'Dua sistem berpikir manusia dan bias kognitif yang memengaruhi keputusan.'})"
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
                    <img src="https://images.unsplash.com/photo-1526318472351-c75fcf070305?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-4">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.4)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Ikigai: Rahasia Hidup Bahagia</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Héctor García, Francesc Miralles · 2016</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-purple-50 text-purple-700">Psikologi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (3)</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Ikigai: Rahasia Hidup Bahagia',author:'Héctor García, Francesc Miralles',year:'2016',isbn:'978-0143130727',call:'158 GAR i',category:'Psikologi',format:'Fisik',rating:'4.4',image:'https://images.unsplash.com/photo-1526318472351-c75fcf070305?q=80&w=1200',synopsis:'Konsep ikigai dari Jepang untuk menemukan tujuan hidup dan keseimbangan.'})"
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
                    <img src="https://images.unsplash.com/photo-1457694587812-e8bf29a43845?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-5">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.3)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Educated</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Tara Westover · 2018</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-amber-50 text-amber-700">Biografi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">e‑Book</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Akses Online</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Educated',author:'Tara Westover',year:'2018',isbn:'978-0399590504',call:'920 WES e',category:'Biografi',format:'e‑Book',rating:'4.3',image:'https://images.unsplash.com/photo-1457694587812-e8bf29a43845?q=80&w=1200',synopsis:'Perjalanan pendidikan seorang perempuan dari keluarga konservatif menuju akademia.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Baca</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 6 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1519682577862-22b62b24e493?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-6">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.6)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Grit</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Angela Duckworth · 2016</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Motivasi</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (5)</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Grit',author:'Angela Duckworth',year:'2016',isbn:'978-1501111112',call:'158 DUC g',category:'Motivasi',format:'Fisik',rating:'4.6',image:'https://images.unsplash.com/photo-1519682577862-22b62b24e493?q=80&w=1200',synopsis:'Ketekunan dan gairah sebagai kunci mencapai tujuan jangka panjang.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Pinjam</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 7 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-7">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★☆<span
                            class="text-xs text-gray-500 ms-1">(4.4)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Homo Deus</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Yuval Noah Harari · 2016</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-emerald-50 text-emerald-700">Sains Pop</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">e‑Book</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Akses Online</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Homo Deus',author:'Yuval Noah Harari',year:'2016',isbn:'978-0062464316',call:'909 HAR h',category:'Sains Pop',format:'e‑Book',rating:'4.4',image:'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?q=80&w=1200',synopsis:'Eksplorasi masa depan umat manusia: AI, bioteknologi, dan etika.'})"
                                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                            <a href="#"
                                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">Baca</a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Card 8 -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-48 bg-gray-100 dark:bg-gray-700">
                    <img src="https://images.unsplash.com/photo-1524578271613-d550eacf6090?q=80&w=1200"
                        class="w-full h-full object-cover" alt="cover-8">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-1 text-yellow-400 text-sm">★★★★★<span
                            class="text-xs text-gray-500 ms-1">(4.7)</span></div>
                    <h3 class="mt-1 font-semibold text-gray-900 dark:text-white">Factfulness</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Hans Rosling · 2018</p>
                    <div class="mt-2 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded bg-emerald-50 text-emerald-700">Sains Pop</span>
                        <span
                            class="px-2 py-1 rounded bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">Fisik</span>
                    </div>
                    <div class="mt-auto pt-4 flex items-center justify-between">
                        <span class="text-xs px-2 py-1 rounded bg-emerald-100 text-emerald-700">Tersedia (1)</span>
                        <div class="flex gap-2">
                            <button
                                @click="open({title:'Factfulness',author:'Hans Rosling',year:'2018',isbn:'978-1250107817',call:'001.42 ROS f',category:'Sains Pop',format:'Fisik',rating:'4.7',image:'https://images.unsplash.com/photo-1524578271613-d550eacf6090?q=80&w=1200',synopsis:'Cara melihat dunia dengan data untuk menghindari kesalahan persepsi umum.'})"
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

        <!-- MODAL: Detail Buku (Alpine) -->
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
        function bookModal() {
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
                open(data) {
                    this.current = data;
                    this.show = true;
                }
            }
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-layout>
