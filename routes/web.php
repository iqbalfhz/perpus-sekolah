<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/profile/kelembagaan', function () {
    return view('pages.profile.kelembagaan');
});
Route::get('/profile/struktur', function () {
    return view('pages.profile.struktur');
});
Route::get('/profile/sejarah', function () {
    return view('pages.profile.sejarah');
});

Route::get('/services', function () {
    return view('pages.services');
});


Route::get('/activities/berita', function () {
    return view('pages.activities.berita');
});
Route::get('/activities/agenda', function () {
    return view('pages.activities.agenda');
});
Route::get('/activities/testimoni', function () {
    return view('pages.activities.testimoni');
});


Route::get('/recommendations/baru', function () {
    return view('pages.recommendations.baru');
});
Route::get('/recommendations/umum', function () {
    return view('pages.recommendations.umum');
});
