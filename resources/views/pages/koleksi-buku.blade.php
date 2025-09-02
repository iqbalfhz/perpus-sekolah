{{-- resources/views/pages/koleksi-buku.blade.php --}}
<x-layout>
    <section class="container mx-auto px-4 py-8" x-data="{
        view: 'grid',
        init() {
            const saved = localStorage.getItem('koleksi_view');
            if (saved) this.view = saved;
            this.$watch('view', v => localStorage.setItem('koleksi_view', v));
        }
    }">

        {{-- Header --}}
        <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Koleksi Buku</h1>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Jelajahi koleksi, cari judul/penulis, filter kategori & rak, dan urutkan sesuai kebutuhan.
                </p>
            </div>

            {{-- View toggle --}}
            <div class="flex items-center gap-2 self-start md:self-auto">
                <button type="button"
                    class="px-3 py-2 rounded-lg border text-sm border-gray-200 dark:border-gray-700
                       text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800
                       focus:outline-none focus:ring-2 focus:ring-blue-500"
                    :class="view === 'grid' ? 'bg-gray-100 dark:bg-gray-800' : ''" @click="view='grid'">Grid</button>
                <button type="button"
                    class="px-3 py-2 rounded-lg border text-sm border-gray-200 dark:border-gray-700
                       text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800
                       focus:outline-none focus:ring-2 focus:ring-blue-500"
                    :class="view === 'list' ? 'bg-gray-100 dark:bg-gray-800' : ''"
                    @click="view='list'">List</button>
            </div>
        </div>

        {{-- Toolbar --}}
        <form method="GET" action="{{ route('koleksi.buku') }}"
            class="grid grid-cols-1 gap-3 md:grid-cols-12 md:gap-4 mb-4">
            {{-- Search --}}
            <div class="md:col-span-5">
                <label class="sr-only" for="q">Cari</label>
                <div class="flex">
                    <div class="relative flex-1">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                            </svg>
                        </span>
                        <input id="q" type="text" name="q" value="{{ request('q') }}"
                            placeholder="Cari judul, penulis, atau ISBN…"
                            class="w-full h-11 pl-10 pr-3 rounded-l-xl border border-gray-200 dark:border-gray-700
                          bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 placeholder-gray-400
                          focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>
                    <button type="submit"
                        class="h-11 px-4 rounded-r-xl bg-blue-600 text-white text-sm font-medium
                         hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Cari
                    </button>
                </div>
            </div>

            {{-- Kategori --}}
            @if (!empty($kategoris ?? null) && count($kategoris))
                <div class="md:col-span-3">
                    <label class="sr-only" for="kategori">Kategori</label>
                    <select id="kategori" name="kategori"
                        class="w-full h-11 px-3 rounded-xl border border-gray-200 dark:border-gray-700
                         bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100
                         focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Semua Kategori</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" @selected(request('kategori') == $kategori->id)>{{ $kategori->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endif

            {{-- Rak --}}
            @if (!empty($raks ?? null) && count($raks))
                <div class="md:col-span-2">
                    <label class="sr-only" for="rak">Rak</label>
                    <select id="rak" name="rak"
                        class="w-full h-11 px-3 rounded-xl border border-gray-200 dark:border-gray-700
                         bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100
                         focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Semua Rak</option>
                        @foreach ($raks as $rak)
                            <option value="{{ $rak->id }}" @selected(request('rak') == $rak->id)>{{ $rak->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @endif

            {{-- Sort --}}
            <div class="md:col-span-2">
                <label class="sr-only" for="sort">Urutkan</label>
                <select id="sort" name="sort"
                    class="w-full h-11 px-3 rounded-xl border border-gray-200 dark:border-gray-700
                       bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100
                       focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Urutkan</option>
                    <option value="terbaru" @selected(request('sort') === 'terbaru')>Terbaru</option>
                    <option value="judul_asc" @selected(request('sort') === 'judul_asc')>Judul A–Z</option>
                    <option value="stok_desc" @selected(request('sort') === 'stok_desc')>Stok Terbanyak</option>
                </select>
            </div>
        </form>

        {{-- Info hasil & reset --}}
        <div class="flex flex-wrap items-center gap-2 mb-4">
            <span class="text-sm text-gray-600 dark:text-gray-400">Menampilkan
                <span class="font-medium text-gray-900 dark:text-white">{{ $bukus->total() }}</span> buku
            </span>

            @if (request()->hasAny(['q', 'kategori', 'rak']))
                <div class="flex flex-wrap items-center gap-2">
                    @if (request('q'))
                        <span
                            class="text-xs px-2 py-1 rounded-full bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200">
                            Kata kunci: <span class="font-medium">"{{ request('q') }}"</span>
                        </span>
                    @endif
                    @if (request('kategori') && !empty($kategoris))
                        <span
                            class="text-xs px-2 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-200">
                            Kategori: <span
                                class="font-medium">{{ optional($kategoris->firstWhere('id', request('kategori')))->nama }}</span>
                        </span>
                    @endif
                    @if (request('rak') && !empty($raks))
                        <span
                            class="text-xs px-2 py-1 rounded-full bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-200">
                            Rak: <span
                                class="font-medium">{{ optional($raks->firstWhere('id', request('rak')))->nama }}</span>
                        </span>
                    @endif

                    <a href="{{ route('koleksi.buku') }}"
                        class="text-xs px-2 py-1 rounded-lg border border-gray-200 dark:border-gray-700
                    text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">
                        Reset Filter
                    </a>
                </div>
            @endif
        </div>

        @if ($bukus->count())
            {{-- GRID: paksa 4 kolom di >=1280px, tanpa pembatas lebar --}}
            <div x-show="view==='grid'"
                class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4">
                @foreach ($bukus as $buku)
                    @php
                        $img = $buku->foto
                            ? (\Illuminate\Support\Str::startsWith($buku->foto, ['http://', 'https://'])
                                ? $buku->foto
                                : asset('storage/' . $buku->foto))
                            : asset('img/buku.jpg');
                        $available = (int) ($buku->stok ?? 0) > 0;
                    @endphp

                    <article id="buku-{{ $buku->id }}"
                        class="group bg-white dark:bg-gray-800 rounded-xl shadow border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-lg transition">
                        {{-- Thumbnail kecil --}}
                        <div class="relative w-full h-40 lg:h-44 overflow-hidden">
                            <img src="{{ $img }}" alt="Sampul {{ $buku->judul }}" loading="lazy"
                                class="w-full h-full object-cover" />
                            <span
                                class="absolute top-2 left-2 inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[10px] font-medium
                           {{ $available
                               ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300'
                               : 'bg-rose-100 text-rose-700 dark:bg-rose-900/30 dark:text-rose-300' }}">
                                <span
                                    class="w-2 h-2 rounded-full {{ $available ? 'bg-green-500' : 'bg-rose-500' }}"></span>
                                {{ $available ? 'Tersedia' : 'Dipinjam' }}
                            </span>
                        </div>

                        <div class="p-3">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-1 line-clamp-2">
                                {{ $buku->judul }}</h3>
                            <p class="text-xs text-gray-600 dark:text-gray-300 mb-1">
                                Penulis: <span class="font-medium">{{ $buku->penulis ?? '-' }}</span>
                            </p>

                            <dl class="grid grid-cols-2 gap-x-2 gap-y-1 text-[11px] text-gray-500 dark:text-gray-400">
                                <div>
                                    <dd>Kategori: {{ optional($buku->kategori)->nama ?? '-' }}</dd>
                                </div>
                                <div>
                                    <dd>Rak: {{ optional($buku->rak)->nama ?? '-' }}</dd>
                                </div>
                                @if (!empty($buku->tahun_terbit))
                                    <div>
                                        <dd>Tahun: {{ $buku->tahun_terbit }}</dd>
                                    </div>
                                @endif
                                @if (!empty($buku->isbn))
                                    <div>
                                        <dd>ISBN: {{ $buku->isbn }}</dd>
                                    </div>
                                @endif
                            </dl>

                            <div class="mt-2 flex items-center justify-between">
                                <span class="text-[11px] text-gray-500 dark:text-gray-400">Stok:
                                    {{ (int) ($buku->stok ?? 0) }}</span>
                                <a href="{{ route('koleksi.buku') }}#buku-{{ $buku->id }}"
                                    class="inline-flex items-center gap-1 text-xs text-blue-600 dark:text-blue-400 hover:underline">
                                    Detail
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- LIST (compact) --}}
            <div x-show="view==='list'" class="space-y-3">
                @foreach ($bukus as $buku)
                    @php
                        $img = $buku->foto
                            ? (\Illuminate\Support\Str::startsWith($buku->foto, ['http://', 'https://'])
                                ? $buku->foto
                                : asset('storage/' . $buku->foto))
                            : asset('img/buku.jpg');
                        $available = (int) ($buku->stok ?? 0) > 0;
                    @endphp

                    <article id="buku-{{ $buku->id }}"
                        class="bg-white dark:bg-gray-800 rounded-xl shadow border border-gray-200 dark:border-gray-700 p-3">
                        <div class="flex gap-3">
                            <div class="w-20 h-28 overflow-hidden rounded-lg bg-gray-100 dark:bg-gray-700 shrink-0">
                                <img src="{{ $img }}" alt="Sampul {{ $buku->judul }}" loading="lazy"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-start justify-between gap-2">
                                    <h3
                                        class="text-sm md:text-base font-semibold text-gray-900 dark:text-white truncate">
                                        {{ $buku->judul }}</h3>
                                    <span
                                        class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[11px] font-medium
                               {{ $available
                                   ? 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300'
                                   : 'bg-rose-100 text-rose-700 dark:bg-rose-900/30 dark:text-rose-300' }}">
                                        {{ $available ? 'Tersedia' : 'Dipinjam' }}
                                    </span>
                                </div>
                                <p class="text-xs text-gray-600 dark:text-gray-300">Penulis: <span
                                        class="font-medium">{{ $buku->penulis ?? '-' }}</span></p>
                                <p class="text-[11px] text-gray-500 dark:text-gray-400">
                                    Kategori: {{ optional($buku->kategori)->nama ?? '-' }} •
                                    Rak: {{ optional($buku->rak)->nama ?? '-' }}
                                    @if (!empty($buku->tahun_terbit))
                                        • Tahun: {{ $buku->tahun_terbit }}
                                    @endif
                                    @if (!empty($buku->isbn))
                                        • ISBN: {{ $buku->isbn }}
                                    @endif
                                </p>
                                <div class="mt-1 flex items-center justify-between">
                                    <span class="text-[11px] text-gray-500 dark:text-gray-400">Stok:
                                        {{ (int) ($buku->stok ?? 0) }}</span>
                                    <a href="{{ route('koleksi.buku') }}#buku-{{ $buku->id }}"
                                        class="inline-flex items-center gap-1 text-xs text-blue-600 dark:text-blue-400 hover:underline">
                                        Detail
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $bukus->withQueryString()->links() }}
            </div>
        @else
            {{-- Empty state --}}
            <div class="border border-dashed border-gray-300 dark:border-gray-700 rounded-2xl p-10 text-center">
                <div class="mx-auto w-16 h-16 rounded-full bg-gray-100 dark:bg-gray-800 grid place-items-center mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tidak ada hasil</h3>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    @if (request()->hasAny(['q', 'kategori', 'rak']))
                        Tidak ada buku yang cocok dengan filter saat ini. Coba ubah kata kunci atau reset filter.
                    @else
                        Belum ada data buku. Tambahkan buku terlebih dahulu.
                    @endif
                </p>
                @if (request()->hasAny(['q', 'kategori', 'rak']))
                    <a href="{{ route('koleksi.buku') }}"
                        class="inline-block mt-4 px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm">
                        Reset Filter
                    </a>
                @endif
            </div>
        @endif
    </section>
</x-layout>
