<h2>Laporan Denda</h2>
<table border="1" cellpadding="4" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Anggota</th>
            <th>Jenis Denda</th>
            <th>Jumlah Denda</th>
            <th>Status Pembayaran</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dendas as $denda)
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
