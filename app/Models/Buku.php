<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    /** @use HasFactory<\Database\Factories\BukuFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];

    // Relasi: Buku milik satu kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Relasi: Buku berada di satu rak
    public function rak()
    {
        return $this->belongsTo(Rak::class, 'rak_id');
    }

    // Relasi: Buku bisa dipinjam berkali-kali
    public function peminjamen()
    {
        return $this->hasMany(Peminjaman::class, 'buku_id');
    }
}
