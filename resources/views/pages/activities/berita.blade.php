<x-layout>
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Berita & Pengumuman</h1>
                <p class="text-gray-700 dark:text-gray-300">Daftar berita terbaru dan pengumuman penting perpustakaan.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-2">
                <a href="#"
                    class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">Semua</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Berita</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-amber-500 text-white hover:bg-amber-600">Pengumuman</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">Event</a>
            </div>
        </div>
    </section>

    <!-- FILTERS -->
    <section class="container mx-auto px-4 pt-6">
        <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
            <form action="#" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <div
                    class="md:col-span-2 flex items-center gap-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                    <input name="q" type="search" placeholder="Cari berita, kata kunci, atau pengumuman…"
                        class="w-full bg-transparent outline-none placeholder:text-gray-400" />
                </div>
                <button
                    class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                    Cari
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </button>
            </form>
        </div>
    </section>

    <!-- PINNED ANNOUNCEMENT -->
    <section class="container mx-auto px-4 pt-6">
        <div
            class="rounded-2xl border border-amber-200 bg-amber-50 dark:border-amber-700 dark:bg-amber-900/20 p-4 flex items-start gap-3">
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-amber-500 text-white">!
            </span>
            <div>
                <p class="text-sm text-amber-900 dark:text-amber-100"><strong>Pengumuman:</strong> Jam layanan sirkulasi
                    pada <strong>24–25 Agustus</strong> berubah menjadi <strong>09.00–15.00</strong>.</p>
                <a href="#" class="text-sm text-amber-700 hover:underline dark:text-amber-300">Lihat detail</a>
            </div>
        </div>
    </section>

    <!-- FEATURED / HEADLINE -->
    <section class="container mx-auto px-4 pt-6">
        <article
            class="grid grid-cols-1 lg:grid-cols-3 gap-6 rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
            <div class="lg:col-span-2 h-56 md:h-72 lg:h-full">
                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1600" alt="Ruang baca"
                    class="w-full h-full object-cover">
            </div>
            <div class="p-6 flex flex-col">
                <div class="flex items-center gap-2 text-xs mb-3">
                    <span class="inline-flex items-center px-2 py-1 rounded bg-blue-50 text-blue-700">Berita</span>
                    <span class="text-gray-500">22 Agustus 2025</span>
                </div>
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Perpustakaan Luncurkan Layanan
                    Peminjaman Mandiri</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-300">Mempercepat proses peminjaman buku dengan kios
                    self-service dan QR code. Program pilot dimulai pekan ini untuk koleksi sirkulasi.</p>
                <div class="mt-auto pt-4 flex gap-2">
                    <button class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700"
                        @click="openNews({title:'Perpustakaan Luncurkan Layanan Peminjaman Mandiri',date:'22 Agustus 2025',category:'Berita',image:'https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1600',body:'Dengan hadirnya kios peminjaman mandiri, mahasiswa dapat melakukan scan kartu dan QR kode buku untuk meminjam tanpa antre. Fase pertama mencakup koleksi populer di lantai 1, dan akan diperluas bulan depan.'})">Baca
                        Selengkapnya</button>
                    <a href="#"
                        class="px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Bagikan</a>
                </div>
            </div>
        </article>
    </section>

    <!-- NEWS GRID -->
    <section class="container mx-auto px-4 py-8" x-data="newsModal()" x-init="init()">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 (Pengumuman) -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-40">
                    <img src="https://images.unsplash.com/photo-1544937950-fa07a98d237f?q=80&w=1200"
                        class="w-full h-full object-cover" alt="Pengumuman">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 text-xs mb-2">
                        <span
                            class="inline-flex items-center px-2 py-1 rounded bg-amber-100 text-amber-700">Pengumuman</span>
                        <span class="text-gray-500">20 Agustus 2025</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Perubahan Jadwal Layanan Sirkulasi</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">Layanan sirkulasi akan menyesuaikan jam
                        operasional selama kegiatan kampus berlangsung.</p>
                    <div class="mt-auto pt-4 flex items-center gap-2">
                        <button class="px-3 py-2 rounded-lg bg-amber-500 text-white hover:bg-amber-600"
                            @click="openNews({title:'Perubahan Jadwal Layanan Sirkulasi',date:'20 Agustus 2025',category:'Pengumuman',image:'https://images.unsplash.com/photo-1544937950-fa07a98d237f?q=80&w=1200',body:'Selama 24–25 Agustus, layanan sirkulasi dibuka pukul 09.00–15.00. Layanan referensi tetap mengikuti jadwal normal. Terima kasih atas pengertiannya.'})">Baca</button>
                        <a href="#" class="text-sm text-gray-700 dark:text-gray-200 hover:underline">Detail</a>
                    </div>
                </div>
            </article>

            <!-- Card 2 (Berita) -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-40">
                    <img src="https://images.unsplash.com/photo-1519682577862-22b62b24e493?q=80&w=1200"
                        class="w-full h-full object-cover" alt="Berita">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 text-xs mb-2">
                        <span class="inline-flex items-center px-2 py-1 rounded bg-blue-50 text-blue-700">Berita</span>
                        <span class="text-gray-500">18 Agustus 2025</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Koleksi Referensi Baru: Data Science</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">Menambah 120 judul buku dan e-book topik
                        data engineering & machine learning.</p>
                    <div class="mt-auto pt-4">
                        <button class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700"
                            @click="openNews({title:'Koleksi Referensi Baru: Data Science',date:'18 Agustus 2025',category:'Berita',image:'https://images.unsplash.com/photo-1519682577862-22b62b24e493?q=80&w=1200',body:'Perpustakaan menambah koleksi referensi Data Science, termasuk judul populer tentang machine learning, MLOps, dan visualisasi data. Cek rak Referensi Lantai 2 atau akses e-book melalui portal.'})">Baca</button>
                    </div>
                </div>
            </article>

            <!-- Card 3 (Berita) -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-40">
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=1200"
                        class="w-full h-full object-cover" alt="Berita">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 text-xs mb-2">
                        <span class="inline-flex items-center px-2 py-1 rounded bg-blue-50 text-blue-700">Berita</span>
                        <span class="text-gray-500">12 Agustus 2025</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Ruang Baca Tenang Dibuka Kembali</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">Ruang baca lantai 3 kembali beroperasi
                        dengan kapasitas terbatas.</p>
                    <div class="mt-auto pt-4">
                        <button class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700"
                            @click="openNews({title:'Ruang Baca Tenang Dibuka Kembali',date:'12 Agustus 2025',category:'Berita',image:'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=1200',body:'Ruang baca tenang kembali beroperasi mulai pekan ini. Mohon menjaga ketenangan dan mengikuti kapasitas maksimal yang ditentukan.'})">Baca</button>
                    </div>
                </div>
            </article>

            <!-- Card 4 (Pengumuman) -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-40">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=1200"
                        class="w-full h-full object-cover" alt="Pengumuman">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 text-xs mb-2">
                        <span
                            class="inline-flex items-center px-2 py-1 rounded bg-amber-100 text-amber-700">Pengumuman</span>
                        <span class="text-gray-500">10 Agustus 2025</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Perawatan Sistem Katalog</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">Sistem katalog online akan tidak dapat
                        diakses sementara pada malam hari.</p>
                    <div class="mt-auto pt-4">
                        <button class="px-3 py-2 rounded-lg bg-amber-500 text-white hover:bg-amber-600"
                            @click="openNews({title:'Perawatan Sistem Katalog',date:'10 Agustus 2025',category:'Pengumuman',image:'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=1200',body:'Perawatan sistem dijadwalkan pada 10 Agustus pukul 22.00–24.00. Mohon maaf atas ketidaknyamanan yang terjadi.'})">Baca</button>
                    </div>
                </div>
            </article>

            <!-- Card 5 (Berita) -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-40">
                    <img src="https://images.unsplash.com/photo-1457694587812-e8bf29a43845?q=80&w=1200"
                        class="w-full h-full object-cover" alt="Berita">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 text-xs mb-2">
                        <span class="inline-flex items-center px-2 py-1 rounded bg-blue-50 text-blue-700">Berita</span>
                        <span class="text-gray-500">8 Agustus 2025</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Kolaborasi dengan Penerbit Lokal</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">Program donasi buku untuk mendukung
                        literasi kampus.</p>
                    <div class="mt-auto pt-4">
                        <button class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700"
                            @click="openNews({title:'Kolaborasi dengan Penerbit Lokal',date:'8 Agustus 2025',category:'Berita',image:'https://images.unsplash.com/photo-1457694587812-e8bf29a43845?q=80&w=1200',body:'Perpustakaan bekerja sama dengan penerbit lokal untuk program donasi buku. Mahasiswa dapat merekomendasikan judul yang ingin dihadirkan.'})">Baca</button>
                    </div>
                </div>
            </article>

            <!-- Card 6 (Berita) -->
            <article
                class="rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 flex flex-col">
                <div class="h-40">
                    <img src="https://images.unsplash.com/photo-1460518451285-97b6aa326961?q=80&w=1200"
                        class="w-full h-full object-cover" alt="Berita">
                </div>
                <div class="p-5 flex-1 flex flex-col">
                    <div class="flex items-center gap-2 text-xs mb-2">
                        <span class="inline-flex items-center px-2 py-1 rounded bg-blue-50 text-blue-700">Berita</span>
                        <span class="text-gray-500">1 Agustus 2025</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Peningkatan Kecepatan Wi‑Fi</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">Jaringan Wi‑Fi perpustakaan ditingkatkan
                        untuk area baca lantai 1 dan 2.</p>
                    <div class="mt-auto pt-4">
                        <button class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700"
                            @click="openNews({title:'Peningkatan Kecepatan Wi‑Fi',date:'1 Agustus 2025',category:'Berita',image:'https://images.unsplash.com/photo-1460518451285-97b6aa326961?q=80&w=1200',body:'Upgrade perangkat jaringan telah dilakukan pada awal Agustus. Jika Anda mengalami kendala, silakan laporkan ke meja layanan.'})">Baca</button>
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

        <!-- MODAL: News Detail (Alpine) -->
        <div x-show="show" x-transition.opacity
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4" style="display:none">
            <div @click.outside="show=false"
                class="w-full max-w-3xl rounded-2xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-lg overflow-hidden">
                <div class="relative h-56">
                    <img :src="current.image" alt="banner" class="w-full h-full object-cover">
                    <button @click="show=false"
                        class="absolute top-3 right-3 rounded-full bg-white/80 p-2 text-gray-700 hover:bg-white">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-xs mb-2">
                        <span class="inline-flex items-center px-2 py-1 rounded bg-gray-100 text-gray-700"
                            x-text="current.category"></span>
                        <span class="text-gray-500" x-text="current.date"></span>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-white" x-text="current.title"></h3>
                    <p class="mt-3 text-gray-700 dark:text-gray-200" x-text="current.body"></p>
                    <div class="mt-5 flex items-center justify-end gap-2">
                        <a href="#"
                            class="px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Bagikan</a>
                        <button @click="show=false"
                            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRIPT: Alpine (hapus jika sudah ada di layout) -->
    <script>
        function newsModal() {
            return {
                show: false,
                current: {
                    title: '',
                    date: '',
                    category: '',
                    image: '',
                    body: ''
                },
                init() {},
                openNews(data) {
                    this.current = data;
                    this.show = true;
                }
            }
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-layout>
