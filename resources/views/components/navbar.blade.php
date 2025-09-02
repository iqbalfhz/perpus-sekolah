<nav class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800" x-data="{ isOpen: false, openMenu: null }"
    @click.outside="openMenu=null">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-3 px-4">
        <!-- Brand + Toggle -->
        <div class="flex items-center gap-3 w-full md:w-auto">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Perpustakaan" class="h-12 w-12 rounded-full">
                <div class="flex flex-col">
                    <span class="block text-2xl font-bold text-blue-600 dark:text-blue-300">Perpustakaan Sekolah</span>
                    <span class="block text-sm text-gray-500 dark:text-gray-300">Melayani Literasi & Edukasi</span>
                </div>
            </a>

            <!-- Mobile hamburger -->
            <button type="button"
                class="md:hidden ml-auto text-gray-700 dark:text-gray-200 hover:text-blue-600 focus:outline-none"
                @click="isOpen = !isOpen" aria-label="Toggle menu" :aria-expanded="isOpen">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('home') }}"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Beranda</a>

            <a href="{{ route('koleksi.buku') }}"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Koleksi Buku</a>

            <!-- Profil -->
            <div class="relative" x-data @keydown.escape="openMenu=null">
                <button type="button"
                    class="flex items-center gap-1 text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition focus:outline-none"
                    @click="openMenu === 'profile' ? openMenu = null : openMenu = 'profile'"
                    :aria-expanded="openMenu === 'profile'" aria-haspopup="true">
                    Profil
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-cloak x-show="openMenu === 'profile'" x-transition
                    class="absolute right-0 mt-2 z-50 w-56 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded shadow">
                    <ul class="py-1 text-gray-700 dark:text-gray-200">
                        <li><a href="{{ route('profile.kelembagaan') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Kelembagaan</a></li>
                        <li><a href="{{ route('profile.struktur') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Struktur Organisasi</a>
                        </li>
                        <li><a href="{{ route('profile.sejarah') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Sejarah</a></li>
                    </ul>
                </div>
            </div>

            <a href="{{ route('services') }}"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Layanan</a>

            <!-- Aktivitas -->
            <div class="relative" x-data @keydown.escape="openMenu=null">
                <button type="button"
                    class="flex items-center gap-1 text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition focus:outline-none"
                    @click="openMenu === 'activities' ? openMenu = null : openMenu = 'activities'"
                    :aria-expanded="openMenu === 'activities'" aria-haspopup="true">
                    Aktivitas
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-cloak x-show="openMenu === 'activities'" x-transition
                    class="absolute right-0 mt-2 z-50 w-64 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded shadow">
                    <ul class="py-1 text-gray-700 dark:text-gray-200">
                        <li><a href="{{ route('activities.berita') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Berita & Pengumuman</a>
                        </li>
                        <li><a href="{{ route('activities.agenda') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Agenda</a></li>
                        <li><a href="{{ route('activities.testimoni') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Testimoni</a></li>
                    </ul>
                </div>
            </div>

            <!-- Rekomendasi -->
            <div class="relative" x-data @keydown.escape="openMenu=null">
                <button type="button"
                    class="flex items-center gap-1 text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition focus:outline-none"
                    @click="openMenu === 'recommendations' ? openMenu = null : openMenu = 'recommendations'"
                    :aria-expanded="openMenu === 'recommendations'" aria-haspopup="true">
                    Rekomendasi
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-cloak x-show="openMenu === 'recommendations'" x-transition
                    class="absolute right-0 mt-2 z-50 w-56 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded shadow">
                    <ul class="py-1 text-gray-700 dark:text-gray-200">
                        <li><a href="{{ route('recommendations.baru') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Buku Baru</a></li>
                        <li><a href="{{ route('recommendations.umum') }}"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Buku Umum</a></li>
                    </ul>
                </div>
            </div>

            <!-- Login -->
            <a href="{{ url('/admin/login') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l4-4m-4 4l4 4" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 0-9 9" />
                </svg>
                Login
            </a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-cloak x-show="isOpen" x-transition
        class="md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <div class="flex flex-col gap-2 px-4 py-3">
            <a href="{{ route('home') }}"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Beranda</a>

            <a href="{{ route('koleksi.buku') }}"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Koleksi Buku</a>

            <!-- Profil (accordion) -->
            <div x-data="{ open: false }">
                <button
                    class="w-full flex items-center justify-between py-2 text-left text-gray-700 dark:text-gray-200 hover:text-blue-600"
                    @click="open=!open">
                    <span>Profil</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            :d="open ? 'M5 15l7-7 7 7' : 'M19 9l-7 7-7-7'" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="ml-3 flex flex-col gap-1">
                    <a href="{{ route('profile.kelembagaan') }}"
                        class="block py-1 text-sm hover:text-blue-600">Kelembagaan</a>
                    <a href="{{ route('profile.struktur') }}" class="block py-1 text-sm hover:text-blue-600">Struktur
                        Organisasi</a>
                    <a href="{{ route('profile.sejarah') }}"
                        class="block py-1 text-sm hover:text-blue-600">Sejarah</a>
                </div>
            </div>

            <a href="{{ route('services') }}"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Layanan</a>

            <!-- Aktivitas (accordion) -->
            <div x-data="{ open: false }">
                <button
                    class="w-full flex items-center justify-between py-2 text-left text-gray-700 dark:text-gray-200 hover:text-blue-600"
                    @click="open=!open">
                    <span>Aktivitas</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            :d="open ? 'M5 15l7-7 7 7' : 'M19 9l-7 7-7-7'" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="ml-3 flex flex-col gap-1">
                    <a href="{{ route('activities.berita') }}" class="block py-1 text-sm hover:text-blue-600">Berita
                        & Pengumuman</a>
                    <a href="{{ route('activities.agenda') }}"
                        class="block py-1 text-sm hover:text-blue-600">Agenda</a>
                    <a href="{{ route('activities.testimoni') }}"
                        class="block py-1 text-sm hover:text-blue-600">Testimoni</a>
                </div>
            </div>

            <!-- Rekomendasi (accordion) -->
            <div x-data="{ open: false }">
                <button
                    class="w-full flex items-center justify-between py-2 text-left text-gray-700 dark:text-gray-200 hover:text-blue-600"
                    @click="open=!open">
                    <span>Rekomendasi</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            :d="open ? 'M5 15l7-7 7 7' : 'M19 9l-7 7-7-7'" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="ml-3 flex flex-col gap-1">
                    <a href="{{ route('recommendations.baru') }}" class="block py-1 text-sm hover:text-blue-600">Buku
                        Baru</a>
                    <a href="{{ route('recommendations.umum') }}" class="block py-1 text-sm hover:text-blue-600">Buku
                        Umum</a>
                </div>
            </div>

            <a href="{{ url('/admin/login') }}"
                class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition flex items-center gap-2 w-max">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l4-4m-4 4l4 4" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 0-9 9" />
                </svg>
                Login
            </a>
        </div>
    </div>
</nav>
