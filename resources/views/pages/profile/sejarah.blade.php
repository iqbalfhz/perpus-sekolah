<x-layout>
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Sejarah Perpustakaan</h1>
                <p class="text-gray-700 dark:text-gray-300">Menampilkan sejarah berdiri dan perkembangan layanan
                    perpustakaan.</p>
            </div>
            <div class="flex items-center gap-2">
                <a href="#"
                    class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">Unduh
                    Profil</a>
                <a href="#arsip" class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Lihat Arsip</a>
            </div>
        </div>
    </section>

    <!-- ERA TABS -->
    <section class="container mx-auto px-4 pt-6">
        <div class="mb-6 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px" id="tabs-sejarah" data-tabs-toggle="#tabsContentSejarah" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-era1" data-tabs-target="#era1"
                        type="button" role="tab" aria-controls="era1" aria-selected="true">2008–2010</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-era2" data-tabs-target="#era2"
                        type="button" role="tab" aria-controls="era2" aria-selected="false">2011–2020</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-era3" data-tabs-target="#era3"
                        type="button" role="tab" aria-controls="era3" aria-selected="false">2021–Sekarang</button>
                </li>
            </ul>
        </div>

        <div id="tabsContentSejarah">
            <!-- Era 1 -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="era1" role="tabpanel" aria-labelledby="tab-era1">
                <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">
                    <li class="mb-6 ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900"><span
                                class="h-2 w-2 rounded-full bg-blue-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2008 — Peresmian Perpustakaan</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Perpustakaan berdiri dengan koleksi awal
                            2.000 judul dan layanan sirkulasi manual.</p>
                        <div class="mt-3 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1491841573634-28140fc7ced7?q=80&w=1600"
                                class="w-full h-48 object-cover" alt="arsip">
                        </div>
                    </li>
                    <li class="ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900"><span
                                class="h-2 w-2 rounded-full bg-blue-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2010 — Program Literasi Perdana</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Workshop literasi informasi pertama untuk
                            mahasiswa baru.</p>
                    </li>
                </ol>
            </div>

            <!-- Era 2 -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="era2" role="tabpanel" aria-labelledby="tab-era2">
                <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">
                    <li class="mb-6 ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900"><span
                                class="h-2 w-2 rounded-full bg-emerald-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2014 — Digitalisasi Katalog</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Penerapan OPAC dan barcode untuk sirkulasi.
                        </p>
                    </li>
                    <li class="mb-6 ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900"><span
                                class="h-2 w-2 rounded-full bg-emerald-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2016 — Otomasi Sistem</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Integrasi sistem peminjaman dan keanggotaan
                            berbasis web.</p>
                        <div class="mt-3 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1532614338840-ab30cf10ed36?q=80&w=1600"
                                class="w-full h-48 object-cover" alt="otomasi">
                        </div>
                    </li>
                    <li class="ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-emerald-100 dark:bg-emerald-900"><span
                                class="h-2 w-2 rounded-full bg-emerald-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2019 — Peningkatan Koleksi</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Koleksi mencapai 10.000+ judul termasuk
                            e-book dan e-journal.</p>
                    </li>
                </ol>
            </div>

            <!-- Era 3 -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="era3" role="tabpanel" aria-labelledby="tab-era3">
                <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">
                    <li class="mb-6 ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-fuchsia-100 dark:bg-fuchsia-900"><span
                                class="h-2 w-2 rounded-full bg-fuchsia-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2023 — Repositori Institusi</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Peluncuran repositori karya ilmiah dan
                            layanan konsultasi sitasi.</p>
                    </li>
                    <li class="mb-6 ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-fuchsia-100 dark:bg-fuchsia-900"><span
                                class="h-2 w-2 rounded-full bg-fuchsia-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2024 — Peminjaman Mandiri</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Kios self-service & QR code untuk
                            mempercepat layanan sirkulasi.</p>
                    </li>
                    <li class="ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-fuchsia-100 dark:bg-fuchsia-900"><span
                                class="h-2 w-2 rounded-full bg-fuchsia-600"></span></span>
                        <h3 class="font-semibold text-gray-900 dark:text-white">2025 — Modernisasi Ruang</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Ruang baca tenang dibuka kembali dengan
                            konektivitas Wi‑Fi yang ditingkatkan.</p>
                        <div class="mt-3 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?q=80&w=1600"
                                class="w-full h-48 object-cover" alt="ruang baca">
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- QUOTE / FOUNDER STORY -->
    <section class="container mx-auto px-4 pt-6">
        <figure class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-6">
            <blockquote class="text-lg md:text-xl text-gray-800 dark:text-gray-100">“Perpustakaan bukan hanya tempat
                menyimpan buku, melainkan jantung pengetahuan yang menghubungkan ide dan masa depan.”</blockquote>
            <figcaption class="mt-3 text-sm text-gray-500">— Kepala Perpustakaan (2008–sekarang)</figcaption>
        </figure>
    </section>

    <!-- MILESTONES -->
    <section class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Tonggak Pencapaian</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-3xl font-extrabold text-blue-700">10k+</div>
                <div class="text-sm text-gray-500">Judul Koleksi</div>
            </div>
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-3xl font-extrabold text-emerald-700">2016</div>
                <div class="text-sm text-gray-500">Otomasi Sistem</div>
            </div>
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-3xl font-extrabold text-fuchsia-700">2023</div>
                <div class="text-sm text-gray-500">Repositori Diluncurkan</div>
            </div>
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-3xl font-extrabold text-amber-700">2024</div>
                <div class="text-sm text-gray-500">Self‑Service</div>
            </div>
        </div>
    </section>

    <!-- GALLERY / ARSIP FOTO -->
    <section id="arsip" class="container mx-auto px-4 pb-10">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Arsip Foto</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
            <a href="#"
                class="group relative rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=800"
                    class="w-full h-40 object-cover group-hover:scale-105 transition" alt="arsip1">
                <div
                    class="absolute bottom-0 left-0 right-0 p-2 text-xs text-white bg-gradient-to-t from-black/60 to-transparent">
                    Ruang Baca (2010)</div>
            </a>
            <a href="#"
                class="group relative rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                <img src="https://images.unsplash.com/photo-1460518451285-97b6aa326961?q=80&w=800"
                    class="w-full h-40 object-cover group-hover:scale-105 transition" alt="arsip2">
                <div
                    class="absolute bottom-0 left-0 right-0 p-2 text-xs text-white bg-gradient-to-t from-black/60 to-transparent">
                    Labor Komputer (2016)</div>
            </a>
            <a href="#"
                class="group relative rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=800"
                    class="w-full h-40 object-cover group-hover:scale-105 transition" alt="arsip3">
                <div
                    class="absolute bottom-0 left-0 right-0 p-2 text-xs text-white bg-gradient-to-t from-black/60 to-transparent">
                    Peluncuran Repositori (2023)</div>
            </a>
            <a href="#"
                class="group relative rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                <img src="https://images.unsplash.com/photo-1532614338840-ab30cf10ed36?q=80&w=800"
                    class="w-full h-40 object-cover group-hover:scale-105 transition" alt="arsip4">
                <div
                    class="absolute bottom-0 left-0 right-0 p-2 text-xs text-white bg-gradient-to-t from-black/60 to-transparent">
                    Kiosk Mandiri (2024)</div>
            </a>
        </div>
        <div class="mt-4 flex items-center justify-end">
            <a href="#"
                class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Lihat
                Semua</a>
        </div>
    </section>
</x-layout>
