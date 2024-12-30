<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StockManagement;

class StockManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StockManagement::create([
            'product_id' => 1,
            'manajemen' => 'Keluar',
            'jumlah_stok' => 30,
            'date' => now(),
            'category_id' => 'Makanan',  // ID kategori 'Minuman'
        ]);
    }
}
