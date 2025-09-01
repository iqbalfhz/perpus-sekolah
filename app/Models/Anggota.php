<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    /** @use HasFactory<\Database\Factories\AnggotaFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];

    // Relasi: Anggota bisa melakukan banyak peminjaman
    public function peminjamen()
    {
        return $this->hasMany(Peminjaman::class, 'anggota_id');
    }

    // Relasi: Anggota bisa punya banyak denda
    public function dendas()
    {
        return $this->hasMany(Denda::class, 'anggota_id');
    }
}
