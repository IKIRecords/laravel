@extends('layouts.app')

@section('content')
    <h1>Add Barang</h1>
    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" required>
        </div>
        <button type="submit">Add Barang</button>
    </form>
@endsection
