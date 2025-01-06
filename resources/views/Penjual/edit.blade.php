

@section('content')
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}" required>
        </div>
        
        <div class="form-group">
            <label for="kategori_id">Kategori</label>
            <select name="kategori_id" class="form-control">
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}" {{ $produk->kategori_id == $item->id ? 'selected' : '' }}>
                        {{ $item->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" value="{{ $produk->deskripsi }}" required>
        </div>
        
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
