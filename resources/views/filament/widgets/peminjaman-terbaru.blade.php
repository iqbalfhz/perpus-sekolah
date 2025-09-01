<div class="bg-white rounded shadow p-4">
    <h3 class="font-bold mb-2">Peminjaman Terbaru</h3>
    <table class="min-w-full text-sm">
        <thead>
            <tr>
                <th>Buku</th>
                <th>Anggota</th>
                <th>Tanggal Pinjam</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->getRecords() as $peminjaman)
                <tr>
                    <td>{{ $peminjaman->buku->judul ?? '-' }}</td>
                    <td>{{ $peminjaman->anggota->nama ?? '-' }}</td>
                    <td>{{ $peminjaman->tanggal_pinjam }}</td>
                    <td>{{ ucfirst($peminjaman->status) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
