<x-layout>
    <!-- HERO -->
    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-blue-50 via-white to-white dark:from-blue-900/20 dark:via-gray-900 dark:to-gray-900">
        </div>
        <div class="relative container mx-auto px-4 pt-14 pb-10">
            <nav class="text-sm text-gray-500 mb-4" aria-label="Breadcrumb">
                <ol class="list-reset inline-flex items-center gap-2">
                    <li><a href="/" class="hover:underline">Beranda</a></li>
                    <li>/</li>
                    <li class="text-gray-700 dark:text-gray-300">Layanan</li>
                </ol>
            </nav>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">Layanan
                        Utama Perpustakaan</h1>
                    <p class="mt-3 text-lg text-gray-600 dark:text-gray-300 max-w-2xl">
                        Dapatkan layanan peminjaman buku, pengembalian, cek status pinjaman, rekomendasi buku,
                        konsultasi pustakawan, dan agenda literasi secara online.
                    </p>
                    <div class="mt-5 flex flex-wrap gap-3">
                        <a href="#peminjaman"
                            class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 transition">Peminjaman
                            Buku</a>
                        <a href="#pengembalian"
                            class="inline-flex items-center gap-2 rounded-lg bg-green-600 px-4 py-2 text-white hover:bg-green-700 transition">Pengembalian
                            Buku</a>
                        <a href="#status"
                            class="inline-flex items-center gap-2 rounded-lg bg-purple-600 px-4 py-2 text-white hover:bg-purple-700 transition">Status
                            Pinjaman</a>
                        <a href="#rekomendasi"
                            class="inline-flex items-center gap-2 rounded-lg bg-pink-600 px-4 py-2 text-white hover:bg-pink-700 transition">Rekomendasi
                            Buku</a>
                        <a href="#konsultasi"
                            class="inline-flex items-center gap-2 rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700 transition">Konsultasi
                            Pustakawan</a>
                        <a href="#agenda"
                            class="inline-flex items-center gap-2 rounded-lg bg-amber-600 px-4 py-2 text-white hover:bg-amber-700 transition">Agenda
                            Literasi</a>
                        <a href="#referensi"
                            class="inline-flex items-center gap-2 rounded-lg bg-gray-600 px-4 py-2 text-white hover:bg-gray-700 transition">Referensi
                            Digital</a>
                    </div>
                </div>
                <div class="lg:pl-10">
                    <div class="grid grid-cols-2 gap-4">
                        <div
                            class="rounded-2xl p-5 border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                            <div class="text-3xl font-bold text-blue-600">24/7</div>
                            <div class="text-sm text-gray-500">Akses katalog buku & status pinjaman</div>
                        </div>
                        <div
                            class="rounded-2xl p-5 border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                            <div class="text-3xl font-bold text-emerald-600">Gratis</div>
                            <div class="text-sm text-gray-500">Konsultasi pustakawan & referensi</div>
                        </div>
                        <div
                            class="rounded-2xl p-5 border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                            <div class="text-3xl font-bold text-purple-600">Real-time</div>
                            <div class="text-sm text-gray-500">Status peminjaman & rekomendasi buku</div>
                        </div>
                        <div
                            class="rounded-2xl p-5 border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
                            <div class="text-3xl font-bold text-amber-600">Terjadwal</div>
                            <div class="text-sm text-gray-500">Agenda literasi & event perpustakaan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TABS: Kategori Layanan -->
    <!-- TABS: Kategori Layanan (relevan untuk perpustakaan) -->
    <section class="py-8">
        <div class="container mx-auto px-4">

            <!-- Header Tabs -->
            <div class="mb-6 border-b border-gray-200 dark:border-gray-700">
                <ul id="tabs-layanan" class="flex flex-wrap -mb-px" data-tabs-toggle="#tabsContentLayanan"
                    data-tabs-active-classes="border-blue-600 text-blue-600 dark:text-blue-500 border-b-2"
                    data-tabs-inactive-classes="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300"
                    role="tablist">

                    <li class="me-2" role="presentation">
                        <button id="tab-peminjaman" type="button" role="tab" aria-controls="pane-peminjaman"
                            aria-selected="true" data-tabs-target="#pane-peminjaman"
                            class="inline-block p-4 border-b-2 rounded-t-lg border-blue-600 text-blue-600">
                            Peminjaman
                        </button>
                    </li>

                    <li class="me-2" role="presentation">
                        <button id="tab-keanggotaan" type="button" role="tab" aria-controls="pane-keanggotaan"
                            aria-selected="false" data-tabs-target="#pane-keanggotaan"
                            class="inline-block p-4 border-b-2 rounded-t-lg">
                            Keanggotaan
                        </button>
                    </li>

                    <li class="me-2" role="presentation">
                        <button id="tab-denda" type="button" role="tab" aria-controls="pane-denda"
                            aria-selected="false" data-tabs-target="#pane-denda"
                            class="inline-block p-4 border-b-2 rounded-t-lg">
                            Denda & Perpanjangan
                        </button>
                    </li>

                    <li class="me-2" role="presentation">
                        <button id="tab-referensi" type="button" role="tab" aria-controls="pane-referensi"
                            aria-selected="false" data-tabs-target="#pane-referensi"
                            class="inline-block p-4 border-b-2 rounded-t-lg">
                            Referensi Digital
                        </button>
                    </li>

                    <li class="me-2" role="presentation">
                        <button id="tab-konsultasi" type="button" role="tab" aria-controls="pane-konsultasi"
                            aria-selected="false" data-tabs-target="#pane-konsultasi"
                            class="inline-block p-4 border-b-2 rounded-t-lg">
                            Konsultasi
                        </button>
                    </li>

                    <li role="presentation">
                        <button id="tab-agenda" type="button" role="tab" aria-controls="pane-agenda"
                            aria-selected="false" data-tabs-target="#pane-agenda"
                            class="inline-block p-4 border-b-2 rounded-t-lg">
                            Agenda Literasi
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Panes -->
            <div id="tabsContentLayanan">
                {{-- Peminjaman --}}
                <div id="pane-peminjaman" role="tabpanel" aria-labelledby="tab-peminjaman"
                    class="p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2">
                            <h3 class="text-xl font-semibold text-blue-700 dark:text-blue-300 mb-2">Peminjaman &
                                Pengembalian</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                Ajukan peminjaman, perpanjang masa pinjam, dan pantau riwayat. Gunakan OPAC untuk
                                mencari buku.
                            </p>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <a href="/peminjaman"
                                    class="group rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:shadow-md transition bg-white dark:bg-gray-800">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="font-semibold">Ajukan Peminjaman</h4>
                                            <p class="text-sm text-gray-500">Isi formulir setelah memilih buku</p>
                                        </div>
                                        <div
                                            class="p-2 rounded-xl bg-blue-50 text-blue-600 group-hover:bg-blue-100 dark:bg-blue-900/30">
                                            📚</div>
                                    </div>
                                </a>
                                <a href="/pengembalian"
                                    class="group rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:shadow-md transition bg-white dark:bg-gray-800">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h4 class="font-semibold">Pengembalian Cepat</h4>
                                            <p class="text-sm text-gray-500">Scan & konfirmasi di loket</p>
                                        </div>
                                        <div
                                            class="p-2 rounded-xl bg-emerald-50 text-emerald-600 group-hover:bg-emerald-100 dark:bg-emerald-900/30">
                                            ✅</div>
                                    </div>
                                </a>
                            </div>

                            <div class="mt-6">
                                <h5 class="font-semibold mb-2">Alur Proses</h5>
                                <ol class="relative border-s border-gray-200 dark:border-gray-700 ms-3">
                                    <li class="mb-6 ms-6">
                                        <span
                                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900">
                                            <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                                        </span>
                                        <p class="text-gray-700 dark:text-gray-200">Cari buku di OPAC</p>
                                    </li>
                                    <li class="mb-6 ms-6">
                                        <span
                                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900">
                                            <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                                        </span>
                                        <p class="text-gray-700 dark:text-gray-200">Ajukan peminjaman (online/loket)
                                        </p>
                                    </li>
                                    <li class="ms-6">
                                        <span
                                            class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900">
                                            <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                                        </span>
                                        <p class="text-gray-700 dark:text-gray-200">Ambil buku & nikmati masa pinjam
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <aside class="space-y-4">
                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-900">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600 dark:text-gray-300">Masa pinjam</span>
                                    <span class="text-sm font-semibold">7–14 hari</span>
                                </div>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm text-gray-600 dark:text-gray-300">Perpanjangan</span>
                                    <span class="text-sm font-semibold">Maks 2x (tanpa antrian)</span>
                                </div>
                                <div class="flex items-center justify-between mt-2">
                                    <span class="text-sm text-gray-600 dark:text-gray-300">Denda terlambat</span>
                                    <span class="text-sm font-semibold">Sesuai kebijakan</span>
                                </div>
                                <a href="/aturan"
                                    class="mt-3 inline-flex text-sm text-blue-600 hover:underline">Detail kebijakan</a>
                            </div>

                            <div
                                class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 bg-white dark:bg-gray-800">
                                <h5 class="font-semibold">Cek Status</h5>
                                <p class="text-sm text-gray-500">Masukkan kode peminjaman untuk melacak.</p>
                                <form action="/status-peminjaman" method="GET" class="mt-2 flex gap-2">
                                    <input name="kode"
                                        class="flex-1 rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                                        placeholder="KODE-XXXX" />
                                    <button
                                        class="px-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Cek</button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>

                {{-- Keanggotaan --}}
                <div id="pane-keanggotaan" role="tabpanel" aria-labelledby="tab-keanggotaan"
                    class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-emerald-700 dark:text-emerald-300 mb-2">Keanggotaan</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Daftar anggota perpustakaan untuk menikmati layanan peminjaman & akses penuh koleksi digital.
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <a href="/anggota/daftar"
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:shadow-md transition bg-white dark:bg-gray-800">
                            <h4 class="font-semibold">Pendaftaran Anggota</h4>
                            <p class="text-sm text-gray-500">Isi data diri & unggah KTP/Kartu Pelajar</p>
                        </a>
                        <a href="/anggota/kartu"
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:shadow-md transition bg-white dark:bg-gray-800">
                            <h4 class="font-semibold">Kartu Anggota Digital</h4>
                            <p class="text-sm text-gray-500">Gunakan saat peminjaman & akses fasilitas</p>
                        </a>
                    </div>
                    <ul class="mt-4 text-sm text-gray-600 dark:text-gray-300 list-disc ps-6">
                        <li>Biaya pendaftaran: <strong>Gratis</strong></li>
                        <li>Masa berlaku: 1 tahun, dapat diperpanjang</li>
                    </ul>
                </div>

                {{-- Denda & Perpanjangan --}}
                <div id="pane-denda" role="tabpanel" aria-labelledby="tab-denda"
                    class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-rose-700 dark:text-rose-300 mb-2">Denda & Perpanjangan</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Hindari keterlambatan dengan perpanjangan online. Lihat rincian denda berikut.
                    </p>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="text-left text-gray-500">
                                <tr>
                                    <th class="py-2">Jenis Koleksi</th>
                                    <th class="py-2">Masa Pinjam</th>
                                    <th class="py-2">Denda / Hari</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 dark:text-gray-200">
                                <tr class="border-t border-gray-200 dark:border-gray-700">
                                    <td class="py-2">Buku Umum</td>
                                    <td class="py-2">14 hari</td>
                                    <td class="py-2">Rp1.000</td>
                                </tr>
                                <tr class="border-t border-gray-200 dark:border-gray-700">
                                    <td class="py-2">Referensi</td>
                                    <td class="py-2">Tidak dipinjamkan</td>
                                    <td class="py-2">—</td>
                                </tr>
                                <tr class="border-t border-gray-200 dark:border-gray-700">
                                    <td class="py-2">Buku Populer</td>
                                    <td class="py-2">7 hari</td>
                                    <td class="py-2">Rp2.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 flex gap-3">
                        <a href="/perpanjangan"
                            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Perpanjang
                            Sekarang</a>
                        <a href="/aturan"
                            class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-800">Kebijakan
                            Lengkap</a>
                    </div>
                </div>

                {{-- Referensi Digital --}}
                <div id="pane-referensi" role="tabpanel" aria-labelledby="tab-referensi"
                    class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-indigo-700 dark:text-indigo-300 mb-4">Referensi Digital</h3>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a href="/repositori"
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:shadow-md transition bg-white dark:bg-gray-800">
                            <h4 class="font-semibold">Repositori Kampus</h4>
                            <p class="text-sm text-gray-500">Skripsi, tesis, disertasi.</p>
                        </a>
                        <a href="/e-journal"
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:shadow-md transition bg-white dark:bg-gray-800">
                            <h4 class="font-semibold">E-Journal</h4>
                            <p class="text-sm text-gray-500">Akses jurnal ilmiah.</p>
                        </a>
                        <a href="/e-book"
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:shadow-md transition bg-white dark:bg-gray-800">
                            <h4 class="font-semibold">E-Book</h4>
                            <p class="text-sm text-gray-500">Koleksi buku digital.</p>
                        </a>
                    </div>
                </div>

                {{-- Konsultasi --}}
                <div id="pane-konsultasi" role="tabpanel" aria-labelledby="tab-konsultasi"
                    class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-emerald-700 dark:text-emerald-300 mb-2">Konsultasi &
                        Referensi</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Butuh bantuan mencari sumber & sitasi? Booking
                        sesi dengan pustakawan.</p>
                    <button data-modal-target="modalKonsultasi" data-modal-toggle="modalKonsultasi"
                        class="px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">
                        Booking Konsultasi
                    </button>
                </div>

                {{-- Agenda --}}
                <div id="pane-agenda" role="tabpanel" aria-labelledby="tab-agenda"
                    class="hidden p-4 rounded-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-fuchsia-700 dark:text-fuchsia-300 mb-4">Agenda Literasi</h3>
                    <div class="grid lg:grid-cols-2 gap-4">
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-gray-800">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h4 class="font-semibold">Workshop Sitasi Mendeley</h4>
                                    <p class="text-sm text-gray-500">29 Agustus 2025 · Aula Perpustakaan</p>
                                </div>
                                <a href="/agenda" class="text-sm text-fuchsia-700 hover:underline">Detail</a>
                            </div>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">Belajar manajemen referensi untuk
                                skripsi/tesis.</p>
                        </div>
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 p-5 bg-white dark:bg-gray-800">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h4 class="font-semibold">Kelas Literasi Informasi</h4>
                                    <p class="text-sm text-gray-500">5 September 2025 · Ruang 204</p>
                                </div>
                                <a href="/agenda" class="text-sm text-fuchsia-700 hover:underline">Detail</a>
                            </div>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">Teknik menilai kredibilitas
                                sumber.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Pertanyaan Umum</h2>
                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500">
                        <h2 id="acc-1">
                            <button type="button"
                                class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                                data-accordion-target="#acc-body-1" aria-expanded="false" aria-controls="acc-body-1">
                                <span>Berapa lama masa peminjaman?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="acc-body-1" class="hidden" aria-labelledby="acc-1">
                            <div class="py-3 text-sm text-gray-600 dark:text-gray-300">
                                Masa peminjaman standar 7–14 hari dan dapat diperpanjang jika tidak ada antrian.
                            </div>
                        </div>

                        <h2 id="acc-2">
                            <button type="button"
                                class="flex w-full items-center justify-between py-4 text-left border-b border-gray-200 dark:border-gray-700"
                                data-accordion-target="#acc-body-2" aria-expanded="false" aria-controls="acc-body-2">
                                <span>Bagaimana cara booking konsultasi?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="acc-body-2" class="hidden" aria-labelledby="acc-2">
                            <div class="py-3 text-sm text-gray-600 dark:text-gray-300">
                                Klik <em>Booking Konsultasi</em>, pilih tanggal dan topik, lalu konfirmasi.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-2xl border border-gray-200 dark:border-gray-700 p-6 bg-white dark:bg-gray-800">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Butuh bantuan cepat?</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Hubungi kami untuk pertanyaan mengenai layanan.
                    </p>
                    <div class="mt-4 flex flex-wrap gap-3">
                        <a href="tel:+620000000"
                            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Telepon</a>
                        <a href="mailto:pustakawan@example.com"
                            class="px-4 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL: Booking Konsultasi (Flowbite) -->
    <div id="modalKonsultasi" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div
                class="relative bg-white rounded-lg shadow dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Booking Konsultasi</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-hide="modalKonsultasi">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Tutup modal</span>
                    </button>
                </div>
                <form action="/konsultasi/booking" method="POST" class="p-4 space-y-3">
                    @csrf
                    <div>
                        <label class="block text-sm mb-1">Nama</label>
                        <input name="nama"
                            class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800" required />
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Email</label>
                        <input type="email" name="email"
                            class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800" required />
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm mb-1">Tanggal</label>
                            <input type="date" name="tanggal"
                                class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                                required />
                        </div>
                        <div>
                            <label class="block text-sm mb-1">Topik</label>
                            <select name="topik"
                                class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                                <option>Literature Review</option>
                                <option>Manajemen Referensi</option>
                                <option>Penulisan Sitasi</option>
                                <option>Plagiarisme & Etika</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Catatan</label>
                        <textarea name="catatan" rows="3"
                            class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                            placeholder="Ceritakan kebutuhan Anda"></textarea>
                    </div>
                    <div class="flex items-center justify-between pt-2">
                        <button
                            class="inline-flex items-center gap-2 rounded-lg bg-emerald-600 px-4 py-2 text-white hover:bg-emerald-700"
                            type="submit">
                            Kirim Permintaan
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </button>
                        <button type="button" data-modal-hide="modalKonsultasi"
                            class="rounded-lg px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-800">
                            Batal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- CTA BOTTOM -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <div
                class="rounded-2xl border border-gray-200 dark:border-gray-700 p-6 md:p-8 bg-white dark:bg-gray-800 flex flex-col md:flex-row items-center justify-between gap-6">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Tidak menemukan layanan yang Anda
                        cari?</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-300">Sampaikan kebutuhan Anda—kami siap
                        menyesuaikan.</p>
                </div>
                <a href="/kontak"
                    class="px-4 py-2 rounded-lg bg-gray-900 text-white hover:bg-gray-800 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
</x-layout>
