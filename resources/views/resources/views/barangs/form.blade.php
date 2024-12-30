<div class="form-group">
    <label for="category_id">Kategori</label>
    <select name="category_id" id="category_id" class="form-control">
        <option value="">Pilih Kategori</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ isset($barang) && $barang->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
