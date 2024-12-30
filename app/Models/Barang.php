<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'harga', 'stok', 'category_id', 'Tipe'];
    protected $table = 'barang'; // Pastikan nama tabel sesuai

    // Relasi ke StockManagement
    public function stockManagement()
    {
        return $this->hasMany(StockManagement::class, 'product_id');
    }

    // Relasi ke Category
    public function category()
{
    return $this->belongsTo(Category::class, 'category_id', 'id');
}

    
}