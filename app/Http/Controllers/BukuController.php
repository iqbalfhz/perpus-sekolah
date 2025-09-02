<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Rak;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $q        = trim((string) $request->query('q', ''));
        $sort     = (string) $request->query('sort', 'judul_asc');
        $kategori = $request->integer('kategori');
        $rak      = $request->integer('rak');
        $perPage  = max(6, min((int) $request->query('per_page', 12), 48));

        $sortMap = [
            'terbaru'   => ['created_at', 'desc'],
            'judul_asc' => ['judul', 'asc'],
            'stok_desc' => ['stok', 'desc'],
        ];
        [$sortCol, $sortDir] = $sortMap[$sort] ?? ['judul', 'asc'];

        $query = Buku::query()
            ->with(['kategori:id,nama', 'rak:id,nama'])
            ->when($q, fn($qBuilder) =>
                $qBuilder->where(fn($w) =>
                    $w->where('judul', 'like', "%{$q}%")
                      ->orWhere('penulis', 'like', "%{$q}%")
                      ->orWhere('isbn', 'like', "%{$q}%")
                )
            )
            ->when($kategori, fn($qBuilder) => $qBuilder->where('kategori_id', $kategori))
            ->when($rak, fn($qBuilder) => $qBuilder->where('rak_id', $rak))
            ->orderBy($sortCol, $sortDir);

        $bukus     = $query->paginate($perPage)->withQueryString();
        $kategoris = Kategori::select('id', 'nama')->orderBy('nama')->get();
        $raks      = Rak::select('id', 'nama')->orderBy('nama')->get();

        return view('pages.koleksi-buku', compact('bukus', 'kategoris', 'raks'));
    }
}
