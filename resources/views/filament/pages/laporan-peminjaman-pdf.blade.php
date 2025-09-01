<h2>Laporan Peminjaman</h2>
<table border="1" cellpadding="4" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Buku</th>
            <th>Anggota</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peminjamans as $peminjaman)
            <tr>
                <td>{{ $peminjaman->buku->judul ?? '-' }}</td>
                <td>{{ $peminjaman->anggota->nama ?? '-' }}</td>
                <td>{{ $peminjaman->tanggal_pinjam }}</td>
                <td>{{ $peminjaman->tanggal_kembali ?? '-' }}</td>
                <td>{{ ucfirst($peminjaman->status) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
