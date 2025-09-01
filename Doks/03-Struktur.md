# Dokumentasi Struktur & Alur Perpustakaan Sekolah

## Struktur Folder & File Utama

-   app/Filament/Resources/: Resource CRUD utama
-   app/Filament/Pages/: Halaman custom (Laporan, Dashboard, Setting)
-   app/Filament/Widgets/: Widget dashboard
-   app/Models/: Model Eloquent
-   database/migrations/: File migrasi database
-   database/seeders/: Seeder data dummy
-   database/factories/: Factory data dummy
-   resources/views/filament/pages/: Blade view custom laporan
-   routes/web.php: Routing aplikasi

## Alur Data Dummy

-   Seeder utama: DatabaseSeeder.php memanggil factory untuk semua model utama
-   Factory: Tersedia untuk Buku, Anggota, Peminjaman, Denda, Rak, Kategori, User
-   Data dummy otomatis terisi saat php artisan migrate:fresh --seed

## Migrasi & Relasi

-   Semua tabel utama: buku, anggota, peminjaman, denda, rak, kategori, user
-   Relasi antar tabel sudah diatur sesuai kebutuhan aplikasi

## Resource CRUD

-   Buku: CRUD, relasi kategori & rak
-   Anggota: CRUD, tipe anggota
-   Peminjaman: CRUD, relasi buku & anggota, status
-   Denda: CRUD, relasi peminjaman & anggota, status pembayaran

## Widget & Dashboard

-   Widget statistik: total buku, anggota, peminjaman aktif, denda belum dibayar
-   Widget grafik: peminjaman & denda, filter mingguan/bulanan/tahunan
-   Dashboard: filter tanggal, tampilan card & grafik

## Laporan

-   Laporan peminjaman: tabel, filter, export Excel/PDF
-   Laporan denda: tabel, filter, export Excel/PDF

## Panel Admin

-   Menu dipisah per grup: Manajemen Buku, Anggota, Transaksi, Laporan
-   Icon sesuai judul menu

## Fitur Otentikasi & Role

-   Super admin: shield:super-admin
-   User: factory & seeder

## Paket Utama

-   Filament v3
-   flowframe/laravel-trend (grafik)
-   spatie/laravel-medialibrary (media buku)

---

Lanjutkan ke file berikutnya untuk penjelasan detail kode dan fitur.
