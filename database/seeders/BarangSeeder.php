<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Category;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'nama' => 'Teh Pucuk',
            'category_id' => Category::where('name', 'Minuman')->first()->id,
            'type' => 'Minuman'
        ]);

        Barang::create([
            'nama' => 'Nasi Goreng',
            'category_id' => Category::where('name', 'Makanan')->first()->id,
            'type' => 'Makanan'
        ]);
    }
}
