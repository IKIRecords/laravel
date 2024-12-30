@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h2>Kategori: {{ $category->name }}</h2>
        </div>
    </div>

    <div class="row">
        @if($barangs->count() > 0)
            @foreach($barangs as $barang)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->nama }}</h5>
                            <p>Deskripsi: {{ $barang->deskripsi }}</p>
                            <p>Harga: Rp {{ number_format($barang->harga) }}</p>
                            <p>Stok: {{ $barang->stok }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col">
                <div class="alert alert-info">
                    Belum ada barang dalam kategori ini.
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
