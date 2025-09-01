<div class="bg-white rounded shadow p-4">
    <h3 class="font-bold mb-2">Denda Terbaru</h3>
    <table class="min-w-full text-sm">
        <thead>
            <tr>
                <th>Anggota</th>
                <th>Jenis Denda</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->getRecords() as $denda)
                <tr>
                    <td>{{ $denda->anggota->nama ?? '-' }}</td>
                    <td>{{ ucfirst($denda->jenis_denda) }}</td>
                    <td>{{ number_format($denda->jumlah_denda, 0, ',', '.') }}</td>
                    <td>{{ ucfirst($denda->status_pembayaran) }}</td>
                    <td>{{ $denda->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
