@extends('adminViews.components.index')

@section('isi')
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Kategori Produk</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh data kategori -->
            <tr>
                <td>1</td>
                <td>Elektronik</td>
                <td>Produk-produk elektronik seperti laptop, smartphone, dan lainnya.</td>
                <td><span class="badge bg-success">Aktif</span></td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <form action="#" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fashion</td>
                <td>Pakaian, aksesoris, dan produk fashion lainnya.</td>
                <td><span class="badge bg-danger">Nonaktif</span></td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <form action="#" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="text-end mt-3">
        <a href="#" class="btn btn-primary">Tambah Kategori Baru</a>
    </div>
</div>



@endsection