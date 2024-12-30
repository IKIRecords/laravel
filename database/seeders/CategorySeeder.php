<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Makanan' => 'Kategori untuk makanan'],
            ['name' => 'Minuman' => 'Kategori untuk minuman'],
        ]);
    }
}

    
