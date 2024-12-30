<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockManagement extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'manajemen', 'jumlah_stok', 'date', 'category_id'];


    // Jika perlu, pastikan tipe data kolom 'type' sesuai
    protected $casts = [
        'type' => 'string', // Mengatur tipe data menjadi string
    ];

    // Relasi ke Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'product_id'); // 'product_id' adalah foreign key yang merujuk ke 'barang'
    }
}
