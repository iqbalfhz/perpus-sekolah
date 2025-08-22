Halaman 1
Blueprint Sistem Perpustakaan — Alur & Desain Lengkap
Dokumen ini adalah panduan menyeluruh untuk merancang sistem perpustakaan modern
(sekolah/kampus/umum). Berisi alur proses, aturan bisnis, rancangan data, antarmuka, API, keamanan,
dan rencana implementasi.
1) Tujuan & Ruang Lingkup
**Tujuan:** Mempermudah pengelolaan koleksi, transaksi sirkulasi, keanggotaan, dan pelaporan secara
akurat, cepat, dan terukur.
**Ruang lingkup inti:**
1. Pengadaan & katalogisasi koleksi (buku, jurnal, e-book, audiovisual).
2. Keanggotaan & verifikasi identitas.
3. Sirkulasi: peminjaman, pengembalian, perpanjangan, reservasi/wishlist.
4. Denda, notifikasi, dan blacklist.
5. Inventarisasi & stock opname (barcode/RFID).
6. Laporan & analitik.
7. Admin konfigurasi (jam layanan, kuota, denda, libur, kategori).
2) Aktor & Hak Akses (Role Matrix)
**Anggota/Member**: daftar, cari katalog, pinjam, perpanjang, reservasi, lihat riwayat, bayar denda.
**Pustakawan**: approval anggota, input koleksi, verifikasi katalog, proses pinjam/kembali, kelola denda,
laporan.
**Kepala Perpustakaan**: monitoring KPI, persetujuan pengadaan, kebijakan layanan, audit.
**Admin Sistem/IT**: manajemen user, backup, integrasi SSO, kontrol keamanan.
| Fitur / Role | Anggota | Pustakawan | Kepala Perpus | Admin IT |
|---|:---:|:---:|:---:|:---:|
| Daftar anggota | ✓ (self-service) | ✓ | – | – |
| Cari katalog | ✓ | ✓ | ✓ | – |
| Input/ubah koleksi | – | ✓ | ✓ (approve) | – |
| Peminjaman | ✓ (request) | ✓ (eksekusi) | – | – |
| Pengembalian | – | ✓ | – | – |
| Perpanjangan | ✓ | ✓ (override) | – | – |
| Reservasi | ✓ | ✓ (kelola antrian) | – | – |
| Denda & pembayaran | ✓ (lihat/bayar) | ✓ (tata usaha) | ✓ (monitor) | – |
| Laporan & analitik | – | ✓ | ✓ (strategis) | – |
| Konfigurasi sistem | – | – | – | ✓ |
3) Alur Proses Inti (End-to-End)
3.1 Pendaftaran Anggota
1. Anggota mengisi form (online), unggah identitas (KTP/KTM), verifikasi email/OTP.
2. Sistem cek duplikasi → jika lolos, status **Pending**.


Halaman 2
3. Pustakawan review → **Approve** (aktif) atau **Reject** (alasan).
4. Sistem terbitkan **Member ID** + barcode/digital card.
3.2 Pengadaan & Katalogisasi Koleksi
1. Usulan judul → seleksi → pengadaan (PO/hibah).
2. Input data bibliografis (ISBN, pengarang, edisi) → **katalog** (bisa impor dari sumber MARC/ISBN API).
3. Buat **eksemplar** (copy) dengan **Item ID** dan **lokasi rak**; cetak barcode/RFID tag.
3.3 Peminjaman
1. Anggota cari judul → cek ketersediaan eksemplar.
2. Buat **request** (di web/app) atau langsung di meja sirkulasi.
3. Pustakawan scan Member ID + Item barcode → sistem validasi: status aktif, batas kuota, sanksi.
4. Sistem set **status item = Dipinjam**, tentukan **tanggal jatuh tempo** sesuai aturan.
5. Kirim notifikasi (email/WA) detail pinjaman & due date.
3.4 Pengembalian
1. Pustakawan scan Item barcode → sistem hitung keterlambatan.
2. Jika terlambat → **generate denda** (per hari/per buku; cap maksimal jika ada).
3. Update **status item = Tersedia**; bersihkan reservasi berikutnya bila ada.
4. Kirim notifikasi ringkasan.
3.5 Perpanjangan (Renewal)
1. Anggota ajukan perpanjangan sebelum due date.
2. Sistem cek: **tidak sedang direservasi** oleh orang lain, **belum melewati batas jumlah perpanjangan**,
**tidak ada denda tertunggak**.
3. Jika lolos → perpanjangan otomatis; kirim notifikasi.
3.6 Reservasi (Hold/Queue)
1. Anggota klik **Reservasi** pada judul yang semua eksemplarnya sedang dipinjam.
2. Sistem buat **antrian FIFO** per judul.
3. Saat 1 eksemplar kembali → sistem notifikasi **Siap Diambil** ke antrian teratas (dengan tenggat ambil,
mis. 2×24 jam). Jika lewat tenggat → pindah ke antrian berikutnya.
3.7 Denda & Pembayaran
Opsi pembayaran: loket kasir, payment gateway, e-wallet; integrasi jurnal keuangan (opsional).
Jika tunggakan melampaui ambang → **blokir peminjaman** hingga lunas.
3.8 Inventarisasi & Stock Opname
Periodik scan rak (barcode/RFID) → rekonsiliasi dengan database.
Status khusus: **Hilang**, **Rusak**, **Dalam Perbaikan**, **Dipesan**.
4) Aturan Bisnis (Business Rules)
**Kuota pinjam** per anggota (mis. mahasiswa: 3 item; dosen: 5).


Halaman 3
**Durasi pinjam** (mis. mahasiswa: 7–14 hari; dosen: 30 hari).
**Denda keterlambatan**: rate per hari, **maksimal** per item.
**Grace period** (opsional) 1 hari tanpa denda.
**Perpanjangan**: maksimal N kali; tidak boleh jika ada **reservasi** dari orang lain.
**Blacklist otomatis** jika denda > X atau keterlambatan > Y hari.
**Pengecualian**: pustakawan dapat override dengan alasan (terekam di audit log).
**Rumus denda sederhana:**
Denda = min( (Hari_Terlambat × Tarif/Hari), Maks_Denda_Item )
5) Rancangan Data (ERD Ringkas)
**Entitas utama:**
`Members(member_id, name, email, phone, address, type, status, join_date)`
`Titles(title_id, isbn, title, author, publisher, year, edition, subject, classification, cover_url)`
`Items(item_id, title_id, barcode, location, status, condition)`
`Loans(loan_id, item_id, member_id, loan_date, due_date, return_date, renew_count, handled_by)`
`Reservations(resv_id, title_id, member_id, queue_no, status, created_at, expire_at)`
`Fines(fine_id, loan_id, member_id, amount, status, created_at, paid_at, payment_ref)`
`Users(user_id, name, email, role, password_hash, status)` *(untuk petugas/admin)*
`Configs(key, value)` *(kebijakan layanan)*
`AuditLogs(audit_id, user_id, action, entity, entity_id, detail_json, created_at, ip)`
**Relasi kunci:**
`Titles 1..* Items`
`Items 1..* Loans` (riwayat); item aktif hanya 0..1 loan dengan `return_date IS NULL`.
`Members 1..* Loans`, `Members 1..* Reservations`, `Members 1..* Fines`.
6) Skema Tabel Contoh (SQL)
CREATE TABLE Members (
  member_id SERIAL PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(120) UNIQUE NOT NULL,
  phone VARCHAR(32),
  address TEXT,
  type VARCHAR(20) CHECK (type IN ('siswa','mahasiswa','dosen','umum')),
  status VARCHAR(20) CHECK (status IN ('pending','active','blocked','inactive')) DEFAULT 'pending',
  join_date TIMESTAMP DEFAULT NOW()
);
CREATE TABLE Titles (
  title_id SERIAL PRIMARY KEY,
  isbn VARCHAR(20),
  title VARCHAR(255) NOT NULL,
  author VARCHAR(255),
  publisher VARCHAR(120),


Halaman 4
  year INT,
  edition VARCHAR(30),
  subject VARCHAR(120),
  classification VARCHAR(32),
  cover_url TEXT
);
CREATE TABLE Items (
  item_id SERIAL PRIMARY KEY,
  title_id INT REFERENCES Titles(title_id),
  barcode VARCHAR(64) UNIQUE NOT NULL,
  location VARCHAR(64),
  status VARCHAR(20) CHECK (status IN ('tersedia','dipinjam','reservasi','hilang','rusak','perbaikan')) DEFAULT 'tersedia',
  "condition" VARCHAR(20) DEFAULT 'baik'
);
CREATE TABLE Loans (
  loan_id SERIAL PRIMARY KEY,
  item_id INT REFERENCES Items(item_id),
  member_id INT REFERENCES Members(member_id),
  loan_date TIMESTAMP DEFAULT NOW(),
  due_date TIMESTAMP NOT NULL,
  return_date TIMESTAMP,
  renew_count INT DEFAULT 0,
  handled_by INT REFERENCES Users(user_id)
);
CREATE TABLE Reservations (
  resv_id SERIAL PRIMARY KEY,
  title_id INT REFERENCES Titles(title_id),
  member_id INT REFERENCES Members(member_id),
  queue_no INT NOT NULL,
  status VARCHAR(20) CHECK (status IN ('antri','siap_diambil','kedaluwarsa','selesai','batal')) DEFAULT 'antri',
  created_at TIMESTAMP DEFAULT NOW(),
  expire_at TIMESTAMP
);
CREATE TABLE Fines (
  fine_id SERIAL PRIMARY KEY,
  loan_id INT REFERENCES Loans(loan_id),
  member_id INT REFERENCES Members(member_id),
  amount NUMERIC(12,2) NOT NULL,
  status VARCHAR(20) CHECK (status IN ('unpaid','paid','waived')) DEFAULT 'unpaid',
  created_at TIMESTAMP DEFAULT NOW(),
  paid_at TIMESTAMP,
  payment_ref VARCHAR(80)
);
CREATE TABLE Users (
  user_id SERIAL PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(120) UNIQUE NOT NULL,
  role VARCHAR(20) CHECK (role IN ('pustakawan','kepala','admin')),
  password_hash TEXT NOT NULL,
  status VARCHAR(20) DEFAULT 'active'
);
CREATE TABLE AuditLogs (
  audit_id SERIAL PRIMARY KEY,
  user_id INT REFERENCES Users(user_id),
  action VARCHAR(40),
  entity VARCHAR(40),
  entity_id INT,
  detail_json JSONB,
  created_at TIMESTAMP DEFAULT NOW(),
  ip VARCHAR(45)
);


Halaman 5
7) Alur Status & Pseudocode
**Status Item:** `tersedia → dipinjam → (kembali → tersedia) | (hilang/rusak/perbaikan)`
**Pseudocode hitung denda saat pengembalian:**
late_days = max(0, (return_date - due_date).days)
rate = get_config('fine_rate_per_day')
cap  = get_config('fine_cap_per_item')
fine = min(late_days * rate, cap)
if fine > 0: create_fine(loan_id, member_id, fine)
**Pseudocode perpanjangan:**
if today <= due_date and not has_active_reservation(title_id) and renew_count < MAX_RENEW and member_clear(member_id):
    due_date += service_days(member_type)
    renew_count += 1
    notify(member_id, 'Perpanjangan disetujui', due_date)
else:
    reject('Tidak memenuhi syarat perpanjangan')
8) Desain Antarmuka (UI/UX) — Alur Layar
8.1 Portal Anggota (Web/Mobile)
**Beranda**: ringkasan pinjaman aktif, due date terdekat, jumlah denda.
**Katalog**: pencarian (judul/penulis/ISBN/subject), filter status, tombol **Pinjam/Reservasi**.
**Detail Judul**: metadata, ketersediaan per eksemplar, tombol **Reservasi** bila habis.
**Keranjang Pinjam** (opsional) untuk multi-item.
**Profil**: kartu anggota (barcode), riwayat, pembayaran denda, pengaturan notifikasi.
8.2 Console Pustakawan (Sirkulasi)
**Scan & Go**: input barcode member + item → tampil validasi & due date.
**Pengembalian**: scan item → hitung denda otomatis → opsi bayar/utang.
**Perpanjangan/Override**: form alasan; semua override tercatat di audit.
**Reservasi**: daftar antrian, konfirmasi “Siap Diambil”, set tanggal kedaluwarsa ambil.
8.3 Backoffice
**Koleksi**: CRUD judul & eksemplar, impor MARC/CSV, cetak label/barcode.
**Keanggotaan**: verifikasi, blokir/aktif, batch upload.
**Konfigurasi**: jam layanan, tarif denda, kuota, hari libur.
**Laporan**: pinjaman per periode, anggota aktif, koleksi paling populer, buku hilang/rusak, pendapatan
denda.
9) API (Contoh Endpoint REST)
POST   /api/auth/login


Halaman 6
POST   /api/members            # pendaftaran
GET    /api/titles?query=...   # pencarian katalog
POST   /api/loans              # buat pinjaman (petugas)
PATCH  /api/loans/{id}/return  # pengembalian
POST   /api/loans/{id}/renew   # perpanjangan
POST   /api/reservations       # buat reservasi
GET    /api/members/{id}/fines
POST   /api/fines/{id}/pay
**Contoh respons pencarian katalog:**
{
  "items": [
    {
      "title_id": 101,
      "title": "Dasar-Dasar Farmakologi",
      "author": "A. Nugroho",
      "available": 2,
      "total": 5
    }
  ],
  "total": 1
}
10) Integrasi & Perangkat Keras
**Barcode/RFID**: scanner USB/BT; label printer untuk spine & barcode.
**SSO** (kampus/sekolah) via OAuth2/SAML.
**Payment Gateway** untuk denda.
**Email/SMS/WhatsApp API** untuk notifikasi.
**OPAC** (Online Public Access Catalog) terpisah dari backoffice.
11) Keamanan & Kepatuhan
**Autentikasi**: JWT/OAuth2; password hashed (Argon2/BCrypt).
**Otorisasi**: role-based (RBAC); prinsip least privilege.
**Validasi input** & **rate limiting** di endpoint kritis.
**Audit log** untuk semua aksi sensitif (override, penghapusan).
**Backup** terjadwal + uji restore; enkripsi at-rest (DB) & in-transit (TLS).
**Privacy**: minimalkan PII, retensi data, consent notifikasi.
12) Laporan & KPI
**Sirkulasi bulanan** (pinjam/kembali/perpanjang per kategori).
**Koleksi terpopuler** (Top-N judul/penulis/subject).
**Ketepatan waktu** (on-time return rate).
**Denda** (pendapatan, age of debt, top defaulter — jika relevan).
**Kualitas data** (eksemplar tanpa barcode, metadata kurang, duplikasi anggota).


Halaman 7
13) Arsitektur & Teknologi (Saran)
**Monolith modular** untuk tahap awal (lebih cepat & sederhana); siap diekstrak ke microservice jika skala
membesar.
**Backend**: Node.js (NestJS) / Java (Spring Boot) / Python (Django/DRF).
**Frontend**: React/Next.js; mobile opsional dengan React Native/Flutter.
**Database**: PostgreSQL (relasional, kuat untuk transaksi & laporan).
**Search**: PostgreSQL full-text / ElasticSearch (jika katalog besar).
**Caching**: Redis untuk sesi & queue antrian reservasi.
**Message Queue**: RabbitMQ/Kafka (notifikasi & proses asynchronous).
**Infra**: Docker, CI/CD, monitoring (Grafana/Prometheus), logging terpusat.
14) Kinerja & Skala
Index di kolom pencarian (title/author/isbn), foreign key, partial index status aktif.
Batasi payload API (pagination), gunakan ETag/HTTP caching untuk katalog.
Gunakan **optimistic concurrency** saat memproses reservasi FIFO.
Batch job terjadwal: reminder due date H-2, denda otomatis, auto-expire reservasi.
15) Uji Coba & SOP Operasional
**Testing**: unit (aturan denda, antrian), integrasi (pinjam-kembali), E2E (alur anggota), load test katalog.
**SOP**: peminjaman manual saat offline, prosedur buku hilang/rusak, stock opname, reset password,
eskalasi insiden.
**Dokumentasi pengguna**: panduan pustakawan & FAQ anggota.
16) Roadmap Fitur Lanjutan
**Self-checkout kiosk** (scan mandiri; anti-theft gate RFID).
**Rekomendasi personal** (collaborative filtering; “Anda mungkin suka”).
**E-book lending** (DRM, concurrent license).
**Integrasi Google/Microsoft for Education** untuk SSO & kalender reminder.
**Mode multi-cabang** (lokasi, antar-pinjam antar-cabang).
17) Contoh User Story (Siap Dikembangkan)
1. *Sebagai anggota*, saya ingin mencari judul berdasarkan kata kunci agar cepat menemukan buku yang
saya butuhkan.
2. *Sebagai pustakawan*, saya ingin menscan barcode item dan anggota untuk memproses pinjaman dengan
validasi otomatis.
3. *Sebagai anggota*, saya ingin menerima pengingat H-2 sebelum jatuh tempo agar tidak kena denda.
4. *Sebagai pustakawan*, saya ingin melihat dan mengatur antrian reservasi per judul agar distribusi adil.


Halaman 8
5. *Sebagai kepala perpustakaan*, saya ingin dashboard KPI bulanan agar bisa mengambil keputusan
pengadaan.
Ringkasan Eksekutif
Mulai dari **monolith modular** + PostgreSQL.
Pastikan **RBAC, audit log, backup** aktif sejak awal.
Implement **sirkulasi inti** dulu (pinjam/kembali/perpanjang/reservasi) + **notifikasi** + **laporan dasar**.
Siapkan **barcode** dan SOP stock opname.
Dokumentasi & pelatihan pustakawan → go-live bertahap.


