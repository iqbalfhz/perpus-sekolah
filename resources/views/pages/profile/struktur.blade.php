<x-layout>
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Struktur Organisasi</h1>
                <p class="text-gray-700 dark:text-gray-300">Bagan dan penjelasan struktur organisasi perpustakaan
                    sekolah/kampus.</p>
            </div>
            <div class="flex items-center gap-2">
                <a href="#"
                    class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">Unduh
                    Bagan (PNG)</a>
                <a href="#tupoksi" class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Lihat Tupoksi</a>
            </div>
        </div>
    </section>

    <!-- ORGANOGRAM (SVG) -->
    <section class="container mx-auto px-4 pt-6" x-data="orgModal()" x-init="init()">
        <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
            <div class="flex items-center justify-between mb-3">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Bagan Organisasi</h2>
                <div class="flex items-center gap-2 text-xs text-gray-500">
                    <span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded bg-blue-600"></span>
                        Pimpinan</span>
                    <span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded bg-emerald-600"></span>
                        Bidang</span>
                    <span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded bg-purple-600"></span>
                        Unit</span>
                </div>
            </div>

            <!-- Responsive SVG diagram -->
            <div class="w-full">
                <svg viewBox="0 0 1000 560" class="w-full h-[420px] md:h-[520px]">
                    <!-- connectors -->
                    <g stroke="#cbd5e1" stroke-width="2">
                        <!-- from head to second level -->
                        <line x1="500" y1="120" x2="500" y2="180" />
                        <line x1="500" y1="180" x2="300" y2="180" />
                        <line x1="500" y1="180" x2="700" y2="180" />
                        <!-- stems to third level -->
                        <line x1="300" y1="220" x2="300" y2="280" />
                        <line x1="700" y1="220" x2="700" y2="280" />
                        <line x1="300" y1="280" x2="200" y2="280" />
                        <line x1="300" y1="280" x2="400" y2="280" />
                        <line x1="700" y1="280" x2="600" y2="280" />
                        <line x1="700" y1="280" x2="800" y2="280" />
                    </g>

                    <!-- nodes -->
                    <!-- Head -->
                    <g @click="openRole('Kepala Perpustakaan', 'Memimpin kebijakan, pengembangan layanan & koordinasi lintas unit.', 'Dr. Maya Putri')"
                        class="cursor-pointer">
                        <rect x="400" y="60" width="200" height="60" rx="12" fill="#2563eb" />
                        <rect x="402" y="62" width="196" height="56" rx="11" fill="white"
                            opacity="0.08" />
                        <text x="500" y="90" fill="white" font-size="16" text-anchor="middle" font-weight="700">Kepala
                            Perpustakaan</text>
                        <text x="500" y="110" fill="#e5e7eb" font-size="12" text-anchor="middle">Dr. Maya Putri</text>
                    </g>

                    <!-- Second level -->
                    <g @click="openRole('Bidang Layanan', 'Mengelola sirkulasi, keanggotaan, layanan peminjaman & pengembalian.', 'Arif Kurnia')"
                        class="cursor-pointer">
                        <rect x="200" y="180" width="200" height="60" rx="12" fill="#059669" />
                        <text x="300" y="210" fill="white" font-size="16" text-anchor="middle"
                            font-weight="700">Bidang Layanan</text>
                        <text x="300" y="230" fill="#e5e7eb" font-size="12" text-anchor="middle">Koordinator: Arif
                            Kurnia</text>
                    </g>

                    <g @click="openRole('Bidang Pengolahan', 'Seleksi, akuisisi, katalogisasi, klasifikasi & pemeliharaan koleksi.', 'Nadia Lestari')"
                        class="cursor-pointer">
                        <rect x="600" y="180" width="200" height="60" rx="12" fill="#059669" />
                        <text x="700" y="210" fill="white" font-size="16" text-anchor="middle"
                            font-weight="700">Bidang Pengolahan</text>
                        <text x="700" y="230" fill="#e5e7eb" font-size="12" text-anchor="middle">Koordinator: Nadia
                            Lestari</text>
                    </g>

                    <!-- Third level under Layanan -->
                    <g @click="openRole('Sirkulasi', 'Peminjaman, pengembalian, perpanjangan, denda & reservasi.', 'Tim Sirkulasi')"
                        class="cursor-pointer">
                        <rect x="140" y="280" width="120" height="56" rx="10" fill="#7c3aed" />
                        <text x="200" y="310" fill="white" font-size="14" text-anchor="middle"
                            font-weight="600">Sirkulasi</text>
                    </g>

                    <g @click="openRole('Keanggotaan', 'Pendaftaran & manajemen anggota, kartu & verifikasi.', 'Staf Keanggotaan')"
                        class="cursor-pointer">
                        <rect x="340" y="280" width="120" height="56" rx="10" fill="#7c3aed" />
                        <text x="400" y="310" fill="white" font-size="14" text-anchor="middle"
                            font-weight="600">Keanggotaan</text>
                    </g>

                    <!-- Third level under Pengolahan -->
                    <g @click="openRole('Katalogisasi', 'Entri bibliografis, penentuan tajuk subjek & nomor klas.', 'Tim Katalogisasi')"
                        class="cursor-pointer">
                        <rect x="540" y="280" width="120" height="56" rx="10" fill="#7c3aed" />
                        <text x="600" y="310" fill="white" font-size="14" text-anchor="middle"
                            font-weight="600">Katalogisasi</text>
                    </g>

                    <g @click="openRole('Akuisisi', 'Pengadaan koleksi, donasi, dan evaluasi kebutuhan.', 'Tim Akuisisi')"
                        class="cursor-pointer">
                        <rect x="740" y="280" width="120" height="56" rx="10" fill="#7c3aed" />
                        <text x="800" y="310" fill="white" font-size="14" text-anchor="middle"
                            font-weight="600">Akuisisi</text>
                    </g>
                </svg>
            </div>

            <!-- Modal (Alpine) -->
            <div x-show="show" x-transition.opacity
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4" style="display:none">
                <div @click.outside="show=false"
                    class="w-full max-w-lg rounded-2xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-lg">
                    <div class="flex items-center justify-between p-4 border-b dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white" x-text="current.title"></h3>
                        <button @click="show=false"
                            class="text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 space-y-2">
                        <p class="text-sm text-gray-600 dark:text-gray-300"><strong>Penanggung jawab:</strong> <span
                                x-text="current.pic"></span></p>
                        <p class="text-sm text-gray-700 dark:text-gray-200" x-text="current.desc"></p>
                    </div>
                    <div class="p-4 flex items-center justify-end gap-2">
                        <a href="#tupoksi"
                            class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Lihat
                            Tupoksi</a>
                        <button @click="show=false"
                            class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM CARDS -->
    <section class="container mx-auto px-4 pt-6">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Struktur & Tim</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <div
                class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5 text-center">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=300"
                    class="w-20 h-20 rounded-full object-cover mx-auto" alt="avatar">
                <div class="mt-3 font-semibold">Dr. Maya Putri</div>
                <div class="text-xs text-gray-500">Kepala Perpustakaan</div>
            </div>
            <div
                class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5 text-center">
                <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=300"
                    class="w-20 h-20 rounded-full object-cover mx-auto" alt="avatar">
                <div class="mt-3 font-semibold">Arif Kurnia</div>
                <div class="text-xs text-gray-500">Koordinator Layanan</div>
            </div>
            <div
                class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5 text-center">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=300"
                    class="w-20 h-20 rounded-full object-cover mx-auto" alt="avatar">
                <div class="mt-3 font-semibold">Nadia Lestari</div>
                <div class="text-xs text-gray-500">Koordinator Pengolahan</div>
            </div>
            <div
                class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5 text-center">
                <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=300"
                    class="w-20 h-20 rounded-full object-cover mx-auto" alt="avatar">
                <div class="mt-3 font-semibold">Fajar W.</div>
                <div class="text-xs text-gray-500">Analis Sistem</div>
            </div>
        </div>
    </section>

    <!-- TUPOKSI (Accordion) -->
    <section id="tupoksi" class="container mx-auto px-4 py-8">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">Tugas & Fungsi</h2>
        <div id="accordion-struct" data-accordion="collapse"
            data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
            data-inactive-classes="text-gray-500">
            <h2 id="s-1">
                <button type="button"
                    class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                    data-accordion-target="#s-body-1" aria-expanded="true" aria-controls="s-body-1">
                    <span>Kepala Perpustakaan</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="s-body-1" class="hidden" aria-labelledby="s-1">
                <div class="py-3 text-sm text-gray-600 dark:text-gray-300">Merumuskan kebijakan, perencanaan strategis,
                    pengawasan layanan, dan kemitraan.</div>
            </div>

            <h2 id="s-2">
                <button type="button"
                    class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                    data-accordion-target="#s-body-2" aria-expanded="false" aria-controls="s-body-2">
                    <span>Bidang Layanan</span>
                    <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="s-body-2" class="hidden" aria-labelledby="s-2">
                <div class="py-3 text-sm text-gray-600 dark:text-gray-300">Sirkulasi, keanggotaan, layanan
                    peminjaman/pengembalian, dan reservasi ruang.</div>
            </div>

            <h2 id="s-3">
                <button type="button"
                    class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                    data-accordion-target="#s-body-3" aria-expanded="false" aria-controls="s-body-3">
                    <span>Bidang Pengolahan</span>
                    <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="s-body-3" class="hidden" aria-labelledby="s-3">
                <div class="py-3 text-sm text-gray-600 dark:text-gray-300">Seleksi & akuisisi, katalogisasi,
                    klasifikasi, dan pemeliharaan koleksi.</div>
            </div>

            <h2 id="s-4">
                <button type="button"
                    class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                    data-accordion-target="#s-body-4" aria-expanded="false" aria-controls="s-body-4">
                    <span>Unit TIK</span>
                    <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="s-body-4" class="hidden" aria-labelledby="s-4">
                <div class="py-3 text-sm text-gray-600 dark:text-gray-300">Pengembangan & pemeliharaan sistem informasi
                    perpustakaan, repositori, dan jaringan.</div>
            </div>
        </div>
    </section>

    <!-- SCRIPTS: Alpine (hapus jika sudah ada di layout) -->
    <script>
        function orgModal() {
            return {
                show: false,
                current: {
                    title: '',
                    desc: '',
                    pic: ''
                },
                init() {},
                openRole(title, desc, pic) {
                    this.current = {
                        title,
                        desc,
                        pic
                    };
                    this.show = true;
                }
            }
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-layout>
