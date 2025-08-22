<x-layout>
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Kelembagaan Perpustakaan</h1>
                <p class="text-gray-700 dark:text-gray-300">Profil, mandat, struktur organisasi, tugas & fungsi, SOP,
                    serta sejarah singkat.</p>
            </div>
            <div class="flex items-center gap-2">
                <a href="#"
                    class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">Unduh
                    Profil (PDF)</a>
                <button data-modal-target="modalOrganogram" data-modal-toggle="modalOrganogram"
                    class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Lihat Organogram</button>
            </div>
        </div>
    </section>

    <!-- QUICK FACTS -->
    <section class="container mx-auto px-4 pt-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-sm text-gray-500">Tahun Berdiri</div>
                <div class="text-2xl font-extrabold text-gray-900 dark:text-white">2008</div>
            </div>
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-sm text-gray-500">Koleksi</div>
                <div class="text-2xl font-extrabold text-gray-900 dark:text-white">12.500+</div>
            </div>
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-sm text-gray-500">Anggota Aktif</div>
                <div class="text-2xl font-extrabold text-gray-900 dark:text-white">2.300</div>
            </div>
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="text-sm text-gray-500">Staf & Relawan</div>
                <div class="text-2xl font-extrabold text-gray-900 dark:text-white">18</div>
            </div>
        </div>
    </section>

    <!-- TABS -->
    <section class="container mx-auto px-4 py-8">
        <div class="mb-6 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px" id="tabs-kelembagaan" data-tabs-toggle="#tabsContentKelembagaan"
                role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-profil" data-tabs-target="#profil"
                        type="button" role="tab" aria-controls="profil" aria-selected="true">Profil &
                        Mandat</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-struktur"
                        data-tabs-target="#struktur" type="button" role="tab" aria-controls="struktur"
                        aria-selected="false">Struktur Organisasi</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-tupoksi"
                        data-tabs-target="#tupoksi" type="button" role="tab" aria-controls="tupoksi"
                        aria-selected="false">Tugas & Fungsi</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-sop" data-tabs-target="#sop"
                        type="button" role="tab" aria-controls="sop" aria-selected="false">SOP & Regulasi</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="tab-sejarah"
                        data-tabs-target="#sejarah" type="button" role="tab" aria-controls="sejarah"
                        aria-selected="false">Sejarah & Timeline</button>
                </li>
            </ul>
        </div>

        <div id="tabsContentKelembagaan">
            <!-- PROFIL -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="profil" role="tabpanel" aria-labelledby="tab-profil">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Visi</h2>
                        <p class="text-gray-700 dark:text-gray-300">Menjadi pusat literasi, riset, dan inovasi yang
                            inklusif untuk mendukung Tridarma Perguruan Tinggi dan pembelajaran sepanjang hayat.</p>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mt-6 mb-2">Misi</h2>
                        <ul class="list-disc ms-5 text-gray-700 dark:text-gray-300 space-y-1">
                            <li>Menyediakan akses informasi yang cepat, tepat, dan terpercaya.</li>
                            <li>Mengembangkan layanan referensi, literasi informasi, dan koleksi digital.</li>
                            <li>Mendorong kolaborasi akademik dan komunitas literasi.</li>
                        </ul>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white mt-6 mb-2">Mandat</h2>
                        <p class="text-gray-700 dark:text-gray-300">Perpustakaan bertanggung jawab sebagai pengelola
                            sumber belajar, pusat dokumentasi, dan layanan informasi bagi civitas akademika.</p>
                    </div>
                    <aside class="space-y-4">
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-900">
                            <h3 class="font-semibold mb-1">Kontak Resmi</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Email:
                                perpustakaan@example.ac.id<br>Telepon: (021) 123-456</p>
                        </div>
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800">
                            <h3 class="font-semibold mb-1">Jam Layanan</h3>
                            <ul class="text-sm text-gray-600 dark:text-gray-300">
                                <li>Sen–Jum: 08.00–17.00</li>
                                <li>Sab: 09.00–13.00</li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>

            <!-- STRUKTUR -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="struktur" role="tabpanel" aria-labelledby="tab-struktur">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
                                <div class="text-xs text-gray-500">Kepala Perpustakaan</div>
                                <div class="text-lg font-semibold">Dr. Maya Putri</div>
                            </div>
                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
                                <div class="text-xs text-gray-500">Bidang Layanan</div>
                                <div class="text-lg font-semibold">Arif Kurnia</div>
                            </div>
                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
                                <div class="text-xs text-gray-500">Bidang Pengolahan</div>
                                <div class="text-lg font-semibold">Nadia Lestari</div>
                            </div>
                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
                                <div class="text-xs text-gray-500">Teknologi Informasi</div>
                                <div class="text-lg font-semibold">Fajar W.</div>
                            </div>
                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
                                <div class="text-xs text-gray-500">Referensi & Literasi</div>
                                <div class="text-lg font-semibold">Rani Dewanti</div>
                            </div>
                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
                                <div class="text-xs text-gray-500">Administrasi</div>
                                <div class="text-lg font-semibold">Rizky Eka</div>
                            </div>
                        </div>
                    </div>
                    <aside class="space-y-4">
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-900">
                            <h3 class="font-semibold">Dokumen Organisasi</h3>
                            <ul class="mt-2 text-sm">
                                <li><a href="#" class="text-blue-600 hover:underline">SK Pengangkatan Kepala
                                        Perpustakaan (PDF)</a></li>
                                <li><a href="#" class="text-blue-600 hover:underline">Deskripsi Jabatan
                                        (PDF)</a></li>
                                <li><a href="#" class="text-blue-600 hover:underline">Struktur Organisasi
                                        (PNG)</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>

            <!-- TUPOKSI -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="tupoksi" role="tabpanel" aria-labelledby="tab-tupoksi">
                <div id="accordion-tupoksi" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500">
                    <h2 id="tupoksi-1">
                        <button type="button"
                            class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                            data-accordion-target="#tupoksi-body-1" aria-expanded="true"
                            aria-controls="tupoksi-body-1">
                            <span>Pelayanan Sirkulasi</span>
                            <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="tupoksi-body-1" class="hidden" aria-labelledby="tupoksi-1">
                        <div class="py-3 text-sm text-gray-600 dark:text-gray-300">
                            Pengelolaan peminjaman/pengembalian, denda, keanggotaan, dan layanan reservasi.
                        </div>
                    </div>

                    <h2 id="tupoksi-2">
                        <button type="button"
                            class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                            data-accordion-target="#tupoksi-body-2" aria-expanded="false"
                            aria-controls="tupoksi-body-2">
                            <span>Pengolahan Koleksi</span>
                            <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="tupoksi-body-2" class="hidden" aria-labelledby="tupoksi-2">
                        <div class="py-3 text-sm text-gray-600 dark:text-gray-300">
                            Seleksi, akuisisi, katalogisasi, klasifikasi, dan pemeliharaan bahan pustaka.
                        </div>
                    </div>

                    <h2 id="tupoksi-3">
                        <button type="button"
                            class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                            data-accordion-target="#tupoksi-body-3" aria-expanded="false"
                            aria-controls="tupoksi-body-3">
                            <span>Layanan Referensi & Literasi Informasi</span>
                            <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="tupoksi-body-3" class="hidden" aria-labelledby="tupoksi-3">
                        <div class="py-3 text-sm text-gray-600 dark:text-gray-300">
                            Konsultasi penelusuran informasi, pelatihan sitasi, anti-plagiarisme, dan manajemen
                            referensi.
                        </div>
                    </div>

                    <h2 id="tupoksi-4">
                        <button type="button"
                            class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                            data-accordion-target="#tupoksi-body-4" aria-expanded="false"
                            aria-controls="tupoksi-body-4">
                            <span>TIK Perpustakaan</span>
                            <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="tupoksi-body-4" class="hidden" aria-labelledby="tupoksi-4">
                        <div class="py-3 text-sm text-gray-600 dark:text-gray-300">
                            Pengembangan sistem informasi perpustakaan, repositori institusi, dan layanan digital.
                        </div>
                    </div>
                </div>
            </div>

            <!-- SOP & REGULASI -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="sop" role="tabpanel" aria-labelledby="tab-sop">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5">
                        <h3 class="font-semibold">SOP Peminjaman & Pengembalian</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Alur layanan sirkulasi untuk anggota.</p>
                        <div class="mt-3 flex items-center gap-2 text-sm">
                            <a href="#"
                                class="px-3 py-1 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Unduh PDF</a>
                            <a href="#"
                                class="px-3 py-1 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Lihat</a>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5">
                        <h3 class="font-semibold">SOP Layanan Referensi</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Panduan konsultasi dan pelatihan literasi.
                        </p>
                        <div class="mt-3 flex items-center gap-2 text-sm">
                            <a href="#"
                                class="px-3 py-1 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Unduh PDF</a>
                            <a href="#"
                                class="px-3 py-1 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Lihat</a>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5">
                        <h3 class="font-semibold">Kebijakan Pengembangan Koleksi</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Kriteria seleksi, akuisisi, dan evaluasi
                            koleksi.</p>
                        <div class="mt-3 flex items-center gap-2 text-sm">
                            <a href="#"
                                class="px-3 py-1 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Unduh PDF</a>
                            <a href="#"
                                class="px-3 py-1 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Lihat</a>
                        </div>
                    </div>
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-5">
                        <h3 class="font-semibold">Peraturan Perpustakaan</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Tata tertib pemustaka & sanksi pelanggaran.
                        </p>
                        <div class="mt-3 flex items-center gap-2 text-sm">
                            <a href="#"
                                class="px-3 py-1 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Unduh PDF</a>
                            <a href="#"
                                class="px-3 py-1 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SEJARAH -->
            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700"
                id="sejarah" role="tabpanel" aria-labelledby="tab-sejarah">
                <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">
                    <li class="mb-6 ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900"><span
                                class="h-2 w-2 rounded-full bg-blue-600"></span></span>
                        <h4 class="font-semibold text-gray-900 dark:text-white">2008 — Didirikan</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Perpustakaan resmi berdiri dengan koleksi
                            awal 2.000 judul.</p>
                    </li>
                    <li class="mb-6 ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900"><span
                                class="h-2 w-2 rounded-full bg-blue-600"></span></span>
                        <h4 class="font-semibold text-gray-900 dark:text-white">2016 — Otomasi Sistem</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Implementasi sistem informasi perpustakaan
                            terintegrasi.</p>
                    </li>
                    <li class="ms-6">
                        <span
                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900"><span
                                class="h-2 w-2 rounded-full bg-blue-600"></span></span>
                        <h4 class="font-semibold text-gray-900 dark:text-white">2023 — Layanan Digital</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Peluncuran repositori institusi dan
                            peminjaman mandiri berbasis QR.</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- TEAM (optional showcase) -->
    <section class="container mx-auto px-4 pb-10">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Tim Inti</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
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

    <!-- MODAL: ORGANOGRAM -->
    <div id="modalOrganogram" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <div
                class="relative bg-white rounded-lg shadow dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Organogram Perpustakaan</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-hide="modalOrganogram">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Tutup</span>
                    </button>
                </div>
                <div class="p-4">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1600"
                        alt="Organogram" class="w-full rounded-lg">
                    <div class="mt-3 flex items-center justify-end gap-2">
                        <a href="#"
                            class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Unduh</a>
                        <button data-modal-hide="modalOrganogram"
                            class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
