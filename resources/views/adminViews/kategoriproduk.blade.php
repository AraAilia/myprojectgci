@extends('adminViews.components.index')

@section('isi')
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Kategori Produk</h2>

    <!-- Tampilkan pesan sukses -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategoris as $key => $kategori)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $kategori->nama }}</td>
                
                <td>
                    <a href="{{ route('kategori.update', $kategori->id) }}" class="btn btn-warning btn-sm">update</a>
                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</button>
                    </form>
                </td>
                </td>
              
            </tr>
            
            @endforeach
        </tbody>
    </table>

    <!-- Modal Tambah Kategori -->
<div class="modal fade" id="tambahKategoriModal" tabindex="-1" aria-labelledby="tambahKategoriLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahKategoriLabel">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <!-- Nama Kategori -->
                    <div class="mb-3">
                        <label for="namaKategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan nama kategori" required>
                    </div>
                    
                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="text-end mt-3">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKategoriModal">
        Tambah Kategori Baru
    </button>
</div>

 <!-- Modal Edit Kategori -->
 <div class="modal fade" id="tambahKategoriModal" tabindex="-1" aria-labelledby="tambahKategoriLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahKategoriLabel">Edit Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <!-- Nama Kategori -->
                    <div class="mb-3">
                        <label for="namaKategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan nama kategori" required>
                    </div>
                    
                    <!-- Tombol Edit -->
                    <button type="edit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
  
</div>
@endsection
