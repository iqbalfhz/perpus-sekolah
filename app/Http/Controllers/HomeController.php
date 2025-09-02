<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $statistik = [
            'buku' => Buku::count(),
            'anggota' => Anggota::count(),
            'peminjaman' => Peminjaman::where('status', 'dipinjam')->count(),
        ];

        // Ambil 6 buku yang paling banyak dipinjam
        $bukuRekomendasi = Buku::withCount('peminjamen')
            ->orderByDesc('peminjamen_count')
            ->take(10)
            ->get();

        return view('pages.home', compact('statistik', 'bukuRekomendasi'));
    }
}
