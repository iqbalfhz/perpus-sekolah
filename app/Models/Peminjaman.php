<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    /** @use HasFactory<\Database\Factories\PeminjamanFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];

    // Relasi: Peminjaman milik satu anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }

    // Relasi: Peminjaman untuk satu buku
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }

    // Relasi: Peminjaman bisa punya banyak denda
    public function dendas()
    {
        return $this->hasMany(Denda::class, 'peminjaman_id');
    }
}
