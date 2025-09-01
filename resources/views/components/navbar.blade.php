<nav class="bg-white dark:bg-gray-900" x-data="{ isOpen: false }">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-3">
        <div class="flex items-center gap-3 w-full md:w-auto">
            <img src="{{ asset('img/logo.png') }}" alt="Logo Perpustakaan" class="h-12 w-13 rounded-full">
            <div class="flex flex-col">
                <span class="block text-2xl font-bold text-blue-600 dark:text-blue-300">Perpustakaan Sekolah</span>
                <span class="block text-sm text-gray-500 dark:text-gray-300">Melayani Literasi & Edukasi</span>
            </div>
            <div class="md:hidden flex items-center ml-auto">
                <button type="button" class="text-gray-700 dark:text-gray-200 hover:text-blue-600 focus:outline-none"
                    x-on:click="isOpen = !isOpen">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden md:flex items-center gap-6">
            <a href="/"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Beranda</a>
            <div class="relative">
                <button id="dropdownProfileButton" data-dropdown-toggle="dropdownProfile"
                    class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition focus:outline-none flex items-center gap-1">
                    Profil
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="dropdownProfile"
                    class="z-10 hidden w-48 bg-white rounded shadow dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                    <ul class="py-1 text-gray-700 dark:text-gray-200">
                        <li><a href="/profile/kelembagaan"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Kelembagaan</a></li>
                        <li><a href="/profile/struktur"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Struktur Organisasi</a>
                        </li>
                        <li><a href="/profile/sejarah"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Sejarah</a></li>
                    </ul>
                </div>
            </div>
            <a href="/services"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Layanan</a>
            <div class="relative">
                <button id="dropdownActivitiesButton" data-dropdown-toggle="dropdownActivities"
                    class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition focus:outline-none flex items-center gap-1">
                    Aktifitas
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="dropdownActivities"
                    class="z-10 hidden w-48 bg-white rounded shadow dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                    <ul class="py-1 text-gray-700 dark:text-gray-200">
                        <li><a href="/activities/berita"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Berita & Pengumuman</a>
                        </li>
                        <li><a href="/activities/agenda"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Agenda</a></li>
                        <li><a href="/activities/testimoni"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Testimoni</a></li>
                    </ul>
                </div>
            </div>
            <div class="relative">
                <button id="dropdownRecommendationsButton" data-dropdown-toggle="dropdownRecommendations"
                    class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition focus:outline-none flex items-center gap-1">
                    Rekomendasi
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="dropdownRecommendations"
                    class="z-10 hidden w-48 bg-white rounded shadow dark:bg-gray-900 border border-gray-200 dark:border-gray-700">
                    <ul class="py-1 text-gray-700 dark:text-gray-200">
                        <li><a href="/recommendations/baru"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Buku Baru</a></li>
                        <li><a href="/recommendations/umum"
                                class="block px-4 py-2 hover:bg-blue-50 dark:hover:bg-gray-800">Buku Umum</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hidden md:flex items-center gap-2">
            <a href="/admin/login"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l4-4m-4 4l4 4" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 0-9 9" />
                </svg>
                Login
            </a>
        </div>
        <!-- Mobile menu button removed, only one next to logo above -->
    </div>
    <!-- Mobile menu (dropdowns not included for simplicity) -->
    <div x-show="isOpen" x-transition
        class="md:hidden bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
        <div class="flex flex-col gap-2 px-4 py-3">
            <a href="/"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Beranda</a>
            <a href="/profile"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Profil</a>
            <a href="/services"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Layanan</a>
            <a href="/activities"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Aktifitas</a>
            <a href="/recommendations"
                class="text-gray-700 dark:text-gray-200 hover:text-blue-600 font-medium transition">Rekomendasi</a>
            <a href="/login"
                class="mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l4-4m-4 4l4 4" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 0-9 9" />
                </svg>
                Login
            </a>
        </div>
    </div>
</nav>
