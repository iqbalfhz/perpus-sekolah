@php
    use App\Models\Peminjaman;
    $filterAnggota = request('anggota');
    $filterStatus = request('status');
    $query = Peminjaman::with(['buku', 'anggota']);
    if ($filterAnggota) {
        $query->whereHas('anggota', function ($q) use ($filterAnggota) {
            $q->where('nama', 'like', "%$filterAnggota%");
        });
    }
    if ($filterStatus) {
        $query->where('status', $filterStatus);
    }
    $peminjamans = $query->get();
@endphp
<x-filament-panels::page>
    <h2 class="text-xl font-bold mb-4">Laporan Peminjaman</h2>
    <form method="GET" class="mb-4 flex gap-2">
        <input type="text" name="anggota" value="{{ request('anggota') }}" placeholder="Cari Anggota"
            class="border rounded px-2 py-1" />
        <select name="status" class="border rounded px-2 py-1">
            <option value="">Semua Status</option>
            <option value="dipinjam" @if (request('status') == 'dipinjam') selected @endif>Dipinjam</option>
            <option value="dikembalikan" @if (request('status') == 'dikembalikan') selected @endif>Dikembalikan</option>
        </select>
        <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Filter</button>
        <a href="?export=excel{{ request('anggota') ? '&anggota=' . request('anggota') : '' }}{{ request('status') ? '&status=' . request('status') : '' }}"
            class="bg-green-500 text-white px-3 py-1 rounded">Export Excel</a>
        <a href="?export=pdf{{ request('anggota') ? '&anggota=' . request('anggota') : '' }}{{ request('status') ? '&status=' . request('status') : '' }}"
            class="bg-red-500 text-white px-3 py-1 rounded">Export PDF</a>
    </form>
    <table class="min-w-full border">
        <thead>
            <tr>
                <th class="border px-2 py-1">Buku</th>
                <th class="border px-2 py-1">Anggota</th>
                <th class="border px-2 py-1">Tanggal Pinjam</th>
                <th class="border px-2 py-1">Tanggal Kembali</th>
                <th class="border px-2 py-1">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjamans as $peminjaman)
                <tr>
                    <td class="border px-2 py-1">{{ $peminjaman->buku->judul ?? '-' }}</td>
                    <td class="border px-2 py-1">{{ $peminjaman->anggota->nama ?? '-' }}</td>
                    <td class="border px-2 py-1">{{ $peminjaman->tanggal_pinjam }}</td>
                    <td class="border px-2 py-1">{{ $peminjaman->tanggal_kembali ?? '-' }}</td>
                    <td class="border px-2 py-1">{{ ucfirst($peminjaman->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (request('export') == 'excel')
        @php
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment; filename="laporan_peminjaman.xls"');
            echo '<table><tr><th>Buku</th><th>Anggota</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Status</th></tr>';
            foreach ($peminjamans as $peminjaman) {
                echo '<tr>' .
                    '<td>' .
                    ($peminjaman->buku->judul ?? '-') .
                    '</td>' .
                    '<td>' .
                    ($peminjaman->anggota->nama ?? '-') .
                    '</td>' .
                    '<td>' .
                    $peminjaman->tanggal_pinjam .
                    '</td>' .
                    '<td>' .
                    ($peminjaman->tanggal_kembali ?? '-') .
                    '</td>' .
                    '<td>' .
                    ucfirst($peminjaman->status) .
                    '</td>' .
                    '</tr>';
            }
            echo '</table>';
            exit();
        @endphp
    @endif
    @if (request('export') == 'pdf')
        @php
            // PDF export sederhana menggunakan dompdf
            $html = view()->make('filament.pages.laporan-peminjaman-pdf', compact('peminjamans'))->render();
            $dompdf = new Dompdf\Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream('laporan_peminjaman.pdf');
            exit();
        @endphp
    @endif
</x-filament-panels::page>
