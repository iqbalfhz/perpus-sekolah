<x-layout>
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Testimoni Pengunjung</h1>
                <p class="text-gray-700 dark:text-gray-300">Kumpulan testimoni dan pengalaman pengunjung perpustakaan.
                </p>
            </div>
            <div class="flex items-center gap-2">
                <button data-modal-target="modalTestimoni" data-modal-toggle="modalTestimoni"
                    class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Tulis Testimoni</button>
            </div>
        </div>
    </section>

    <!-- RATING SUMMARY -->
    <section class="container mx-auto px-4 pt-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-6">
                <div class="text-4xl font-extrabold text-gray-900 dark:text-white">4.8<span
                        class="text-xl text-gray-400">/5</span></div>
                <div class="mt-2 flex items-center gap-1">
                    <!-- 5 stars filled -->
                    <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.802-2.034a1 1 0 00-1.175 0l-2.802 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81H7.03a1 1 0 00.95-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.802-2.034a1 1 0 00-1.175 0l-2.802 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81H7.03a1 1 0 00.95-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.802-2.034a1 1 0 00-1.175 0l-2.802 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81H7.03a1 1 0 00.95-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.802-2.034a1 1 0 00-1.175 0l-2.802 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81H7.03a1 1 0 00.95-.69l1.07-3.292z" />
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.802 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.802-2.034a1 1 0 00-1.175 0l-2.802 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81H7.03a1 1 0 00.95-.69l1.07-3.292z" />
                    </svg>
                </div>
                <p class="mt-2 text-sm text-gray-500">Berdasarkan 124 ulasan.</p>
            </div>

            <div
                class="lg:col-span-2 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-6">
                <!-- distribution bars -->
                <div class="space-y-2">
                    <div class="flex items-center gap-3">
                        <span class="w-12 text-sm">5 ★</span>
                        <div class="flex-1 h-3 bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-3 bg-green-500" style="width:86%"></div>
                        </div>
                        <span class="w-10 text-sm text-gray-500">86%</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-12 text-sm">4 ★</span>
                        <div class="flex-1 h-3 bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-3 bg-green-400" style="width:10%"></div>
                        </div>
                        <span class="w-10 text-sm text-gray-500">10%</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-12 text-sm">3 ★</span>
                        <div class="flex-1 h-3 bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-3 bg-yellow-400" style="width:3%"></div>
                        </div>
                        <span class="w-10 text-sm text-gray-500">3%</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-12 text-sm">2 ★</span>
                        <div class="flex-1 h-3 bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-3 bg-orange-400" style="width:1%"></div>
                        </div>
                        <span class="w-10 text-sm text-gray-500">1%</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-12 text-sm">1 ★</span>
                        <div class="flex-1 h-3 bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-3 bg-red-400" style="width:0%"></div>
                        </div>
                        <span class="w-10 text-sm text-gray-500">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FILTER TAGS -->
    <section class="container mx-auto px-4 pt-6">
        <div class="flex flex-wrap gap-2">
            <a href="#"
                class="px-3 py-1 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200">Semua</a>
            <a href="#" class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 hover:bg-blue-200">Pelayanan</a>
            <a href="#"
                class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 hover:bg-emerald-200">Fasilitas</a>
            <a href="#"
                class="px-3 py-1 rounded-full bg-purple-100 text-purple-700 hover:bg-purple-200">Koleksi</a>
            <a href="#" class="px-3 py-1 rounded-full bg-amber-100 text-amber-700 hover:bg-amber-200">Suasana</a>
        </div>
    </section>

    <!-- TESTIMONIALS GRID (static content) -->
    <section class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <article class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?q=80&w=400"
                        class="w-10 h-10 rounded-full object-cover" alt="avatar">
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Alya Ramadhani</h3>
                        <p class="text-xs text-gray-500">Mahasiswa · Manajemen</p>
                    </div>
                    <span class="ms-auto text-xs text-gray-500">22 Agu 2025</span>
                </div>
                <div class="mt-2 flex items-center gap-1">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-xs text-gray-500">(5/5)</span>
                </div>
                <p class="mt-2 text-gray-700 dark:text-gray-200">Pelayanannya cepat dan ramah. Kios peminjaman mandiri
                    sangat membantu saat jam sibuk!</p>
                <div class="mt-3 flex flex-wrap gap-2 text-xs">
                    <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Pelayanan</span>
                    <span class="px-2 py-1 rounded bg-emerald-50 text-emerald-700">Fasilitas</span>
                </div>
            </article>

            <article class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?q=80&w=400"
                        class="w-10 h-10 rounded-full object-cover" alt="avatar">
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Raka Pradipta</h3>
                        <p class="text-xs text-gray-500">Mahasiswa · Informatika</p>
                    </div>
                    <span class="ms-auto text-xs text-gray-500">20 Agu 2025</span>
                </div>
                <div class="mt-2 flex items-center gap-1">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-xs text-gray-500">(4/5)</span>
                </div>
                <p class="mt-2 text-gray-700 dark:text-gray-200">Koleksi Data Science-nya lengkap. Semoga ruang colab
                    ditambah lagi colokannya.</p>
                <div class="mt-3 flex flex-wrap gap-2 text-xs">
                    <span class="px-2 py-1 rounded bg-purple-50 text-purple-700">Koleksi</span>
                    <span class="px-2 py-1 rounded bg-amber-50 text-amber-700">Suasana</span>
                </div>
            </article>

            <article class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=400"
                        class="w-10 h-10 rounded-full object-cover" alt="avatar">
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Dewi Anindya</h3>
                        <p class="text-xs text-gray-500">Alumni · Akuntansi</p>
                    </div>
                    <span class="ms-auto text-xs text-gray-500">18 Agu 2025</span>
                </div>
                <div class="mt-2 flex items-center gap-1">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-xs text-gray-500">(5/5)</span>
                </div>
                <p class="mt-2 text-gray-700 dark:text-gray-200">Ruang baca tenang bersih dan nyaman. Wi‑Fi sekarang
                    lebih kencang, mantap.</p>
                <div class="mt-3 flex flex-wrap gap-2 text-xs">
                    <span class="px-2 py-1 rounded bg-emerald-50 text-emerald-700">Fasilitas</span>
                    <span class="px-2 py-1 rounded bg-amber-50 text-amber-700">Suasana</span>
                </div>
            </article>

            <article class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=400"
                        class="w-10 h-10 rounded-full object-cover" alt="avatar">
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Bima Setiawan</h3>
                        <p class="text-xs text-gray-500">Mahasiswa · Hukum</p>
                    </div>
                    <span class="ms-auto text-xs text-gray-500">16 Agu 2025</span>
                </div>
                <div class="mt-2 flex items-center gap-1">
                    <span class="text-yellow-400">★★★★☆</span>
                    <span class="text-xs text-gray-500">(4/5)</span>
                </div>
                <p class="mt-2 text-gray-700 dark:text-gray-200">Proses reservasi ruang diskusi simpel. Staf juga
                    responsif saat tanya koleksi hukum.</p>
                <div class="mt-3 flex flex-wrap gap-2 text-xs">
                    <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Pelayanan</span>
                    <span class="px-2 py-1 rounded bg-purple-50 text-purple-700">Koleksi</span>
                </div>
            </article>

            <article class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=400"
                        class="w-10 h-10 rounded-full object-cover" alt="avatar">
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Sinta Maharani</h3>
                        <p class="text-xs text-gray-500">Dosen · Teknik</p>
                    </div>
                    <span class="ms-auto text-xs text-gray-500">14 Agu 2025</span>
                </div>
                <div class="mt-2 flex items-center gap-1">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-xs text-gray-500">(5/5)</span>
                </div>
                <p class="mt-2 text-gray-700 dark:text-gray-200">Bibliografi untuk riset saya dibantu pustakawan—sangat
                    kompeten dan cepat.</p>
                <div class="mt-3 flex flex-wrap gap-2 text-xs">
                    <span class="px-2 py-1 rounded bg-blue-50 text-blue-700">Pelayanan</span>
                    <span class="px-2 py-1 rounded bg-purple-50 text-purple-700">Koleksi</span>
                </div>
            </article>

            <article class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-5">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?q=80&w=400"
                        class="w-10 h-10 rounded-full object-cover" alt="avatar">
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Yusuf Fakhri</h3>
                        <p class="text-xs text-gray-500">Mahasiswa · Psikologi</p>
                    </div>
                    <span class="ms-auto text-xs text-gray-500">12 Agu 2025</span>
                </div>
                <div class="mt-2 flex items-center gap-1">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-xs text-gray-500">(5/5)</span>
                </div>
                <p class="mt-2 text-gray-700 dark:text-gray-200">Area luar dengan bean bag-nya enak buat baca
                    santai—favorit saya!</p>
                <div class="mt-3 flex flex-wrap gap-2 text-xs">
                    <span class="px-2 py-1 rounded bg-amber-50 text-amber-700">Suasana</span>
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
    </section>

    <!-- MODAL: Tulis Testimoni (Flowbite) -->
    <div id="modalTestimoni" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <div
                class="relative bg-white rounded-lg shadow dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tulis Testimoni</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-hide="modalTestimoni">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Tutup</span>
                    </button>
                </div>
                <form action="#" method="POST" class="p-4 space-y-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm mb-1">Nama</label>
                            <input name="nama"
                                class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                                required />
                        </div>
                        <div>
                            <label class="block text-sm mb-1">Email (opsional)</label>
                            <input type="email" name="email"
                                class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-sm mb-1">Program/Unit (opsional)</label>
                            <input name="unit"
                                class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800" />
                        </div>
                        <div>
                            <label class="block text-sm mb-1">Rating</label>
                            <select name="rating"
                                class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                                <option value="5">★★★★★ (5)</option>
                                <option value="4">★★★★☆ (4)</option>
                                <option value="3">★★★☆☆ (3)</option>
                                <option value="2">★★☆☆☆ (2)</option>
                                <option value="1">★☆☆☆☆ (1)</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm mb-1">Pesan</label>
                        <textarea name="pesan" rows="4"
                            class="w-full rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                            placeholder="Tulis pengalaman Anda..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between pt-2">
                        <button
                            class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700"
                            type="submit">
                            Kirim
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </button>
                        <button type="button" data-modal-hide="modalTestimoni"
                            class="rounded-lg px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-100 hover:bg-gray-50 dark:hover:bg-gray-800">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
