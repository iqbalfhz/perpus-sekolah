<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    /** @use HasFactory<\Database\Factories\DendaFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];

    // Relasi: Denda milik satu peminjaman
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
    }

    // Relasi: Denda milik satu anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }
}
