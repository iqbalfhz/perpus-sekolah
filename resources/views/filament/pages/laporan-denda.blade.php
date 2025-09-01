@php
    use App\Models\Denda;
    $filterAnggota = request('anggota');
    $filterStatus = request('status');
    $query = Denda::with('anggota');
    if ($filterAnggota) {
        $query->whereHas('anggota', function ($q) use ($filterAnggota) {
            $q->where('nama', 'like', "%$filterAnggota%");
        });
    }
    if ($filterStatus) {
        $query->where('status_pembayaran', $filterStatus);
    }
    $dendas = $query->get();
@endphp
<x-filament-panels::page>
    <h2 class="text-xl font-bold mb-4">Laporan Denda</h2>
    <form method="GET" class="mb-4 flex gap-2">
        <input type="text" name="anggota" value="{{ request('anggota') }}" placeholder="Cari Anggota"
            class="border rounded px-2 py-1" />
        <select name="status" class="border rounded px-2 py-1">
            <option value="">Semua Status</option>
            <option value="belum_dibayar" @if (request('status') == 'belum_dibayar') selected @endif>Belum Dibayar</option>
            <option value="sudah_dibayar" @if (request('status') == 'sudah_dibayar') selected @endif>Sudah Dibayar</option>
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
                <th class="border px-2 py-1">Anggota</th>
                <th class="border px-2 py-1">Jenis Denda</th>
                <th class="border px-2 py-1">Jumlah Denda</th>
                <th class="border px-2 py-1">Status Pembayaran</th>
                <th class="border px-2 py-1">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dendas as $denda)
                <tr>
                    <td class="border px-2 py-1">{{ $denda->anggota->nama ?? '-' }}</td>
                    <td class="border px-2 py-1">{{ ucfirst($denda->jenis_denda) }}</td>
                    <td class="border px-2 py-1">{{ number_format($denda->jumlah_denda, 0, ',', '.') }}</td>
                    <td class="border px-2 py-1">{{ ucfirst($denda->status_pembayaran) }}</td>
                    <td class="border px-2 py-1">{{ $denda->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (request('export') == 'excel')
        @php
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment; filename="laporan_denda.xls"');
            echo '<table><tr><th>Anggota</th><th>Jenis Denda</th><th>Jumlah Denda</th><th>Status Pembayaran</th><th>Tanggal</th></tr>';
            foreach ($dendas as $denda) {
                echo '<tr>' .
                    '<td>' .
                    ($denda->anggota->nama ?? '-') .
                    '</td>' .
                    '<td>' .
                    ucfirst($denda->jenis_denda) .
                    '</td>' .
                    '<td>' .
                    number_format($denda->jumlah_denda, 0, ',', '.') .
                    '</td>' .
                    '<td>' .
                    ucfirst($denda->status_pembayaran) .
                    '</td>' .
                    '<td>' .
                    $denda->created_at->format('d-m-Y') .
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
            $html = view()->make('filament.pages.laporan-denda-pdf', compact('dendas'))->render();
            $dompdf = new Dompdf\Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream('laporan_denda.pdf');
            exit();
        @endphp
    @endif
</x-filament-panels::page>
