@extends('adminViews.components.index')

@section('isi')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: rgb(24, 23, 23);
        font-weight: bold; /* Pastikan teks header tabel tebal */
    }

    td {
        color: black !important;                                              
    }

    tr:hover {
        background-color: #f5eded;
    }

    .modal-content {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .modal-header {
        background-color: #007bff;
        color: white;
        border-radius: 10px 10px 0 0;
    }

    .form-label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-primary:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }
</style>

<h2 class="mb-4">Manajemen Produk</h2>

<div class="">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
    <tr>
        <th>No</th>
        <th>Penjual</th>
        <th>Kategori</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Image</th>
        <th>Price</th>
        <th>Aksi</th>

    </tr>
</thead>
    <tbody>
        @foreach ($produk as $produks)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $produks->penjual->nama }}</td>
                <td>{{ $produks->kategori->kategori }}</td>
                <td>{{ $produks->nama }}</td>
                <td>{{ $produks->deskripsi }}</td>
                <td><img src="{{ asset($produks->image_path) }}" alt="{{ $produks->nama }}" style="width: 100px; height: auto;"></td>
                <td>Rp {{ number_format($produks->harga, 0, ',', '.') }}</td>
                
            </tr>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>

@endsection
