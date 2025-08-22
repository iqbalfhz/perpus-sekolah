# Dokumentasi 01-Frontend

## Struktur Folder

```
resources/views/
├── components/
│   ├── layout.blade.php
│   ├── navbar.blade.php
│   └── footer.blade.php
├── pages/
│   ├── home.blade.php
│   ├── services.blade.php
│   ├── activities/
│   │   ├── agenda.blade.php
│   │   ├── berita.blade.php
│   │   ├── testimoni.blade.php
│   ├── profile/
|   |   ├── kelembagaan.blade.php
│   │   ├── struktur.blade.php
│   │   ├── sejarah.blade.php
│   ├── recommendations/
│   │   ├── baru.blade.php
│   │   ├── umum.blade.php
└── ...
```

## Komponen Utama

### 1. Layout

-   File: `components/layout.blade.php`
-   Berisi struktur HTML utama, import CSS/JS, dan menampilkan navbar, footer, serta slot konten.

### 2. Navbar

-   File: `components/navbar.blade.php`
-   Navigasi utama, responsif, mendukung dropdown dan hamburger menu untuk mobile.
-   Link dan sub-menu mengarah ke route dan file view yang sesuai.

### 3. Footer

-   File: `components/footer.blade.php`
-   Footer responsif, berisi copyright dan link penting.

## Halaman Utama

### 1. Home

-   File: `pages/home.blade.php`
-   Berisi hero, pencarian, quick keywords, statistik, dan highlight layanan utama.

### 2. Profile

-   File: `pages/profile.blade.php`
-   Berisi deskripsi kelembagaan, dan link ke sub-halaman:
    -   Struktur Organisasi (`pages/profile/struktur.blade.php`)
    -   Sejarah (`pages/profile/sejarah.blade.php`)

### 3. Services

-   File: `pages/services.blade.php`
-   Berisi layanan perpustakaan: peminjaman, konsultasi, referensi.

### 4. Activities

-   File: `pages/activities.blade.php`
-   Berisi highlight aktifitas, dan link ke sub-halaman:
    -   Agenda (`pages/activities/agenda.blade.php`)
    -   Berita (`pages/activities/berita.blade.php`)
    -   Testimoni (`pages/activities/testimoni.blade.php`)

### 5. Recommendations

-   File: `pages/recommendations.blade.php`
-   Berisi rekomendasi buku, dan link ke sub-halaman:
    -   Buku Baru (`pages/recommendations/baru.blade.php`)
    -   Buku Umum (`pages/recommendations/umum.blade.php`)

## Routing

-   Semua route diatur di `routes/web.php` dan diarahkan ke file di folder `pages`.
-   Sub-menu di navbar mengarah ke sub-halaman sesuai struktur folder.

Contoh:

```
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/profile/struktur', function () {
    return view('pages.profile.struktur');
});
Route::get('/activities/agenda', function () {
    return view('pages.activities.agenda');
});
Route::get('/recommendations/baru', function () {
    return view('pages.recommendations.baru');
});
```

## Fitur Responsif

-   Navbar dan layout mendukung tampilan mobile dan desktop.
-   Hamburger menu dan dropdown aktif dengan Alpine.js dan Flowbite.
-   Semua komponen menggunakan Tailwind CSS v3.

## Integrasi Asset

-   Logo, ikon, dan gambar diletakkan di folder `public/img`.
-   CSS dan JS diatur melalui Vite dan import di layout.

## Komponen Dinamis

-   Setiap halaman dapat menerima data dinamis (misal: agenda, events, berita) melalui variable Blade.
-   Contoh penggunaan:

```blade
@foreach ($events as $e)
    <div class="event-item">{{ $e->title }}</div>
@endforeach
```

## Best Practice

-   Struktur folder rapi: semua halaman di `pages`, komponen di `components`.
-   Setiap sub-menu memiliki file view sendiri.
-   Route konsisten dengan struktur folder.
-   Komponen reusable untuk layout, navbar, footer, header.
-   Menggunakan Tailwind dan Flowbite untuk UI modern.

## Pengembangan Lanjutan

-   Tambahkan halaman baru di folder `pages` sesuai kebutuhan.
-   Update route di `web.php` jika ada penambahan halaman.
-   Gunakan komponen Blade untuk bagian yang sering digunakan.

---

Dokumentasi ini mencakup seluruh struktur, komponen, dan alur frontend yang sudah Anda bangun. Jika ingin menambah detail atau penjelasan lain, silakan instruksikan.
