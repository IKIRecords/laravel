<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Barang;

class CategoryController extends Controller
{
    // Menampilkan daftar kategori
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Menampilkan barang berdasarkan kategori
    public function show($id)
{
    dd("Ini fungsi show. ID: " . $id);

    $category = Category::findOrFail($id);
    $barang = Barang::where('category_id', $id)->get();

    return view('categories.show', [
        'category' => $category,
        'barang' => $barang,
    ]);
}


    // Form edit kategori
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
}
