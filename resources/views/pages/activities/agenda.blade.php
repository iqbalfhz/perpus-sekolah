<x-layout :title="$title ?? 'Agenda Kegiatan'">
    <!-- HERO -->
    <section class="container mx-auto px-4 pt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-blue-700">Agenda Kegiatan</h1>
                <p class="text-gray-700 dark:text-gray-300">Jadwal dan detail agenda kegiatan literasi di perpustakaan.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-2">
                <a href="/agenda"
                    class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">Semua</a>
                <a href="/agenda?tag=workshop"
                    class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Workshop</a>
                <a href="/agenda?tag=kelas"
                    class="px-3 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">Kelas</a>
                <a href="/agenda?tag=seminar"
                    class="px-3 py-2 rounded-lg bg-amber-600 text-white hover:bg-amber-700">Seminar</a>
            </div>
        </div>
    </section>

    <!-- FILTERS -->
    <section class="container mx-auto px-4 pt-6">
        <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
            <form action="/agenda" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-3">
                <div
                    class="md:col-span-2 flex items-center gap-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                    <input name="q" type="search" placeholder="Cari agenda, topik, atau pemateri…"
                        class="w-full bg-transparent outline-none placeholder:text-gray-400" />
                </div>
                <div date-rangepicker class="grid grid-cols-2 gap-2 items-center">
                    <input name="start" type="text"
                        class="rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800" placeholder="Mulai" />
                    <input name="end" type="text"
                        class="rounded-lg border-gray-200 dark:border-gray-700 dark:bg-gray-800"
                        placeholder="Selesai" />
                </div>
                <button
                    class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                    Terapkan
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                </button>
            </form>
        </div>
    </section>

    <!-- MAIN GRID: Calendar + List -->
    <section class="container mx-auto px-4 py-8">
        @php

            $events = collect([
                (object) [
                    'id' => 1,
                    'title' => 'Workshop Sitasi Mendeley',
                    'date' => '2025-08-29',
                    'time_start' => '09:00',
                    'time_end' => '11:00',
                    'place' => 'Aula Perpustakaan',
                    'category' => 'Workshop',
                    'category_color' => '#3b82f6',
                    'description' => 'Belajar manajemen referensi menggunakan Mendeley.',
                ],
                (object) [
                    'id' => 2,
                    'title' => 'Kelas Literasi Informasi',
                    'date' => '2025-09-05',
                    'time_start' => '13:30',
                    'time_end' => '15:00',
                    'place' => 'Ruang 204',
                    'category' => 'Kelas',
                    'category_color' => '#10b981',
                    'description' => 'Teknik menilai kredibilitas sumber dan strategi penelusuran.',
                ],
                (object) [
                    'id' => 3,
                    'title' => 'Seminar Open Access',
                    'date' => '2025-09-18',
                    'time_start' => '10:00',
                    'time_end' => '12:00',
                    'place' => 'Auditorium',
                    'category' => 'Seminar',
                    'category_color' => '#a21caf',
                    'description' => 'Mengenal kebijakan akses terbuka dan repositori institusi.',
                ],
            ]);
        @endphp
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6" x-data="calendar()" x-init="init()">
            <!-- Calendar -->
            <div
                class="lg:col-span-1 rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4">
                <div class="flex items-center justify-between mb-3">
                    <button @click="prev()" class="p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <div class="text-center">
                        <div class="text-lg font-semibold" x-text="monthName + ' ' + year"></div>
                        <div class="text-xs text-gray-500">Klik tanggal untuk melihat agenda</div>
                    </div>
                    <button @click="next()" class="p-2 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="grid grid-cols-7 text-center text-xs text-gray-500 mb-1">
                    <div>Min</div>
                    <div>Sen</div>
                    <div>Sel</div>
                    <div>Rab</div>
                    <div>Kam</div>
                    <div>Jum</div>
                    <div>Sab</div>
                </div>
                <div class="grid grid-cols-7 gap-1 select-none">
                    <!-- leading blanks -->
                    <template x-for="n in startDay" :key="'b' + n">
                        <div class="h-10"></div>
                    </template>
                    <!-- days -->
                    <template x-for="d in daysInMonth" :key="d">
                        <button @click="pick(d)"
                            class="h-10 rounded-lg text-sm flex items-center justify-center border border-transparent"
                            :class="{
                                'bg-blue-600 text-white': isToday(d),
                                'hover:border-blue-300 hover:bg-blue-50 dark:hover:bg-gray-700': !isToday(d) && !
                                    isPicked(d),
                                'ring-2 ring-blue-500 border-blue-300 bg-blue-50 dark:bg-gray-700': isPicked(d)
                            }"
                            x-text="d"></button>
                    </template>
                </div>
                <!-- Legend -->
                <div class="mt-4 flex items-center gap-3 text-xs text-gray-500">
                    <span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded bg-blue-600"></span> Hari
                        ini</span>
                    <span class="inline-flex items-center gap-1"><span class="w-3 h-3 rounded bg-blue-200"></span>
                        Terpilih</span>
                </div>
            </div>

            <!-- List / Upcoming -->
            <div class="lg:col-span-2">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Agenda Terdekat</h2>
                    <div class="flex items-center gap-2">
                        <a href="#"
                            class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Unduh
                            .ics</a>
                        <a href="#"
                            class="px-3 py-2 rounded-lg bg-gray-900 text-white hover:bg-gray-800 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100">Berlangganan</a>
                    </div>
                </div>

                <div class="space-y-4" id="agenda-list">
                    @forelse(($events ?? []) as $e)
                        @php $d = \Carbon\Carbon::parse($e->date); @endphp
                        <div
                            class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                            <div class="flex items-start gap-3">
                                <div class="w-14 text-center">
                                    <div class="text-xl font-extrabold text-blue-700">{{ $d->format('d') }}</div>
                                    <div class="text-xs text-gray-500">{{ $d->locale('id')->isoFormat('MMM') }}</div>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 dark:text-white">{{ $e->title }}</h3>
                                    <p class="text-sm text-gray-500">
                                        {{ $e->time_start }}–{{ $e->time_end }} · {{ $e->place }}
                                        @if (!empty($e->category))
                                            · <span class="inline-flex items-center gap-1">
                                                <span class="w-2 h-2 rounded-full"
                                                    style="background-color: {{ $e->category_color ?? '#3b82f6' }}"></span>
                                                {{ $e->category }}
                                            </span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <button @click='openDetail(@js([
    'title' => $e->title,
    'date' => $d->locale('id')->isoFormat('DD MMM YYYY'),
    'time' => ($e->time_start ?? '') . '–' . ($e->time_end ?? ''),
    'place' => $e->place,
    'desc' => $e->description,
]))'
                                    class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                                    Detail
                                </button>
                                <a href="#"
                                    class="px-3 py-2 rounded-lg border border-blue-200 text-blue-700 hover:bg-blue-50">Daftar</a>
                            </div>
                        </div>
                    @empty
                        <div
                            class="rounded-xl border border-dashed border-gray-300 dark:border-gray-700 p-6 text-center text-sm text-gray-500">
                            Belum ada agenda pada rentang ini.
                        </div>
                    @endforelse
                </div>
                <div class="text-xs text-gray-500">Agu</div>
            </div>
            <div>
                <h3 class="font-semibold text-gray-900 dark:text-white">Workshop Sitasi Mendeley</h3>
                <p class="text-sm text-gray-500">09.00–11.00 · Aula Perpustakaan · <span
                        class="inline-flex items-center gap-1"><span
                            class="w-2 h-2 bg-blue-500 rounded-full"></span>Workshop</span></p>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <button
                @click="openDetail({title:'Workshop Sitasi Mendeley',date:'29 Agu 2025',time:'09.00–11.00',place:'Aula Perpustakaan',desc:'Belajar manajemen referensi untuk karya ilmiah menggunakan Mendeley.'})"
                class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
            <a href="/agenda/29-agustus-2025/daftar"
                class="px-3 py-2 rounded-lg border border-blue-200 text-blue-700 hover:bg-blue-50">Daftar</a>
        </div>
        </div>

        <div
            class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div class="flex items-start gap-3">
                <div class="w-14 text-center">
                    <div class="text-xl font-extrabold text-emerald-700">05</div>
                    <div class="text-xs text-gray-500">Sep</div>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Kelas Literasi Informasi</h3>
                    <p class="text-sm text-gray-500">13.30–15.00 · Ruang 204 · <span
                            class="inline-flex items-center gap-1"><span
                                class="w-2 h-2 bg-emerald-500 rounded-full"></span>Kelas</span></p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button
                    @click="openDetail({title:'Kelas Literasi Informasi',date:'05 Sep 2025',time:'13.30–15.00',place:'Ruang 204',desc:'Teknik menilai kredibilitas sumber dan strategi penelusuran.'})"
                    class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                <a href="/agenda/5-september-2025/daftar"
                    class="px-3 py-2 rounded-lg border border-blue-200 text-blue-700 hover:bg-blue-50">Daftar</a>
            </div>
        </div>

        <div
            class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div class="flex items-start gap-3">
                <div class="w-14 text-center">
                    <div class="text-xl font-extrabold text-fuchsia-700">18</div>
                    <div class="text-xs text-gray-500">Sep</div>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Seminar Open Access</h3>
                    <p class="text-sm text-gray-500">10.00–12.00 · Auditorium · <span
                            class="inline-flex items-center gap-1"><span
                                class="w-2 h-2 bg-fuchsia-500 rounded-full"></span>Seminar</span></p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button
                    @click="openDetail({title:'Seminar Open Access',date:'18 Sep 2025',time:'10.00–12.00',place:'Auditorium',desc:'Mengenal kebijakan akses terbuka dan repositori institusi.'})"
                    class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Detail</button>
                <a href="/agenda/18-september-2025/daftar"
                    class="px-3 py-2 rounded-lg border border-blue-200 text-blue-700 hover:bg-blue-50">Daftar</a>
            </div>
        </div>
        </div>
        </div>
        </div>

        <!-- EVENT DETAIL MODAL (Alpine) -->
        <div x-show="showModal" x-transition.opacity
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4" style="display:none">
            <div @click.outside="showModal=false"
                class="w-full max-w-lg rounded-2xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 shadow-lg">
                <div class="flex items-center justify-between p-4 border-b dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white" x-text="current.title"></h3>
                    <button @click="showModal=false"
                        class="text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="p-4 space-y-2">
                    <p class="text-sm text-gray-600 dark:text-gray-300"><strong>Tanggal:</strong> <span
                            x-text="current.date"></span> · <span x-text="current.time"></span></p>
                    <p class="text-sm text-gray-600 dark:text-gray-300"><strong>Tempat:</strong> <span
                            x-text="current.place"></span></p>
                    <p class="text-sm text-gray-700 dark:text-gray-200" x-text="current.desc"></p>
                </div>
                <div class="p-4 flex items-center justify-end gap-2">
                    <a :href="'#?title=' + encodeURIComponent(current.title) +
                        '&date=' + encodeURIComponent(current.date) +
                        ' &
                        time =
                        ' + encodeURIComponent(current.time)"
                        class="px-3 py-2 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Tambah
                        ke Kalender</a>
                    <a :href="' # ?
                        title = ' + encodeURIComponent(current.title) + ' & date = ' + encodeURIComponent(current.date)"
                        class="px-3 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">Daftar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SCRIPTS -->
    <script>
        function calendar() {
            return {
                today: new Date(),
                month: new Date().getMonth(),
                year: new Date().getFullYear(),
                daysInMonth: 0,
                startDay: 0,
                picked: null,
                showModal: false,
                current: {
                    title: '',
                    date: '',
                    time: '',
                    place: '',
                    desc: ''
                },
                get monthName() {
                    return new Date(this.year, this.month).toLocaleString('id-ID', {
                        month: 'long'
                    })
                },
                init() {
                    this.compute()
                },
                compute() {
                    const first = new Date(this.year, this.month, 1)
                    this.startDay = (first.getDay()) // 0=Min … 6=Sab
                    this.daysInMonth = new Date(this.year, this.month + 1, 0).getDate()
                },
                prev() {
                    if (this.month === 0) {
                        this.month = 11;
                        this.year--
                    } else {
                        this.month--
                    }
                    this.compute()
                },
                next() {
                    if (this.month === 11) {
                        this.month = 0;
                        this.year++
                    } else {
                        this.month++
                    }
                    this.compute()
                },
                isToday(d) {
                    return this.today.getDate() === d && this.today.getMonth() === this.month && this.today
                        .getFullYear() === this.year
                },
                isPicked(d) {
                    return this.picked && this.picked.d === d && this.picked.m === this.month && this.picked.y === this.year
                },
                pick(d) {
                    this.picked = {
                        d,
                        m: this.month,
                        y: this.year
                    }
                },
                openDetail(evt) {
                    this.current = evt;
                    this.showModal = true
                }
            }
        }
    </script>

    <!-- Helper: Alpine.js (jika belum terpasang di layout) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</x-layout>
