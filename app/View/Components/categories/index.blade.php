@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Daftar Kategori</h2>

    <!-- Tombol Tambah Kategori -->
    <div class="mb-3">
        <a href="{{ url('/categories/create') }}" class="btn btn-primary">Tambah Kategori</a>
    </div>

    <!-- Daftar Kategori -->
    <div class="list-group">
        @forelse($categories as $category)
            <a href="{{ url('/categories/' . $category->id . '/show') }}" class="list-group-item list-group-item-action">
                {{ $category->name }}
            </a>
        @empty
            <p class="text-muted">Belum ada kategori yang tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
