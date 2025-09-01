<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    /** @use HasFactory<\Database\Factories\RakFactory> */
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];

    // Relasi: Satu rak punya banyak buku
    public function bukus()
    {
        return $this->hasMany(Buku::class, 'rak_id');
    }
}
