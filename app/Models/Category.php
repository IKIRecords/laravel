<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai konvensi
    protected $table = 'categories';

    // Kolom yang bisa diisi
    protected $fillable = ['nama', 'description'];

    // Relasi ke Barang (satu kategori memiliki banyak barang)
    public function barang()
    {
        return $this->hasMany(Barang::class, 'category_id', );  // 'category_id' harus ada di tabel barang
    }
}
