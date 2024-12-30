<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Menampilkan form create barang
    public function create()
    {
        $categories = Category::all();
        return view('barang.create', compact('categories'));
    }

    // Menampilkan form edit barang
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $categories = Category::all();
        return view('barang.edit', compact('barang', 'categories'));
    }
}
