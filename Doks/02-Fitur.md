# Dokumentasi Detail Fitur & Kode

## 1. Resource CRUD

### Buku

-   Model: app/Models/Buku.php
-   Resource: app/Filament/Resources/BukuResource.php
-   Relasi: Kategori, Rak
-   Fitur: Validasi, filter, relasi

### Anggota

-   Model: app/Models/Anggota.php
-   Resource: app/Filament/Resources/AnggotaResource.php
-   Fitur: Tipe anggota, validasi, filter

### Peminjaman

-   Model: app/Models/Peminjaman.php
-   Resource: app/Filament/Resources/PeminjamanResource.php
-   Relasi: Buku, Anggota
-   Fitur: Status, tanggal pinjam/kembali, filter

### Denda

-   Model: app/Models/Denda.php
-   Resource: app/Filament/Resources/DendaResource.php
-   Relasi: Peminjaman, Anggota
-   Fitur: Jenis denda, status pembayaran, filter

## 2. Dashboard & Widget

-   File: app/Filament/Pages/Dashboard.php
-   Widget statistik: app/Filament/Widgets/AdminOverview.php
-   Widget grafik: app/Filament/Widgets/AdminStats.php
-   Filter tanggal dashboard: Form di dashboard, semua widget support filter

## 3. Laporan

-   Laporan peminjaman: resources/views/filament/pages/laporan-peminjaman.blade.php
-   Laporan denda: resources/views/filament/pages/laporan-denda.blade.php
-   Export Excel/PDF, filter anggota/status

## 4. Seeder & Factory

-   Seeder utama: database/seeders/DatabaseSeeder.php
-   Factory: Semua model utama
-   Data dummy otomatis terisi

## 5. Panel Admin & Navigasi

-   Menu dipisah per grup, icon sesuai judul
-   File: Resource & Page masing-masing

## 6. Otentikasi & Role

-   User: factory, seeder
-   Super admin: shield:super-admin

## 7. Paket & Dependensi

-   Filament v3: panel, resource, widget
-   flowframe/laravel-trend: grafik
-   spatie/laravel-medialibrary: media buku

---

## 8. Relasi Antar Model

-   Buku memiliki relasi ke Kategori (`kategori_id`) dan Rak (`rak_id`).
-   Anggota dapat memiliki banyak Peminjaman dan Denda.
-   Peminjaman berelasi ke Buku (`buku_id`) dan Anggota (`anggota_id`).
-   Denda berelasi ke Peminjaman (`peminjaman_id`) dan Anggota (`anggota_id`).
-   Relasi antar model diatur dengan Eloquent relationship (hasMany, belongsTo).

Contoh relasi:

```php
// Di model Buku
public function kategori() { return $this->belongsTo(Kategori::class); }
public function rak() { return $this->belongsTo(Rak::class); }

// Di model Anggota
public function peminjamans() { return $this->hasMany(Peminjaman::class); }
public function dendas() { return $this->hasMany(Denda::class); }

// Di model Peminjaman
public function buku() { return $this->belongsTo(Buku::class); }
public function anggota() { return $this->belongsTo(Anggota::class); }

// Di model Denda
public function peminjaman() { return $this->belongsTo(Peminjaman::class); }
public function anggota() { return $this->belongsTo(Anggota::class); }
```

## 9. Alur Data & Proses

1. **Registrasi Data Dummy**
    - Saat `php artisan migrate:fresh --seed`, semua data dummy (buku, anggota, peminjaman, denda, rak, kategori, user) otomatis terisi.
2. **CRUD Resource**
    - Admin dapat mengelola data melalui panel Filament (tambah/edit/hapus buku, anggota, peminjaman, denda).
3. **Transaksi Peminjaman**
    - Anggota meminjam buku, status peminjaman berubah, tanggal pinjam dan kembali tercatat.
4. **Denda**
    - Jika peminjaman terlambat/kondisi tertentu, denda otomatis tercatat dan status pembayaran dapat diubah.
5. **Dashboard**
    - Statistik dan grafik menampilkan data real-time dari database, bisa difilter waktu.
6. **Laporan**
    - Admin dapat melihat laporan peminjaman/denda, filter data, dan export Excel/PDF.
7. **Panel & Navigasi**
    - Menu admin dipisah per grup, icon sesuai judul, akses mudah ke fitur utama.
8. **Otentikasi & Role**
    - Super admin dibuat dengan shield, user dummy otomatis terisi.

---

Jika ingin dokumentasi lebih detail per kode, relasi, atau alur, silakan minta file tambahan.
