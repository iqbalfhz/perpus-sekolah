<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Models\Buku;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Koleksi Buku
Route::get('/koleksi-buku', [BukuController::class, 'index'])->name('koleksi.buku');

// Profil
Route::prefix('profile')->name('profile.')->group(function () {
    Route::view('/kelembagaan', 'pages.profile.kelembagaan')->name('kelembagaan');
    Route::view('/struktur', 'pages.profile.struktur')->name('struktur');
    Route::view('/sejarah', 'pages.profile.sejarah')->name('sejarah');
});

// Layanan
Route::view('/services', 'pages.services')->name('services');

// Aktivitas
Route::prefix('activities')->name('activities.')->group(function () {
    Route::view('/berita', 'pages.activities.berita')->name('berita');
    Route::view('/agenda', 'pages.activities.agenda')->name('agenda');
    Route::view('/testimoni', 'pages.activities.testimoni')->name('testimoni');
});

// Rekomendasi
Route::prefix('recommendations')->name('recommendations.')->group(function () {
    Route::view('/baru', 'pages.recommendations.baru')->name('baru');
    Route::view('/umum', 'pages.recommendations.umum')->name('umum');
});
