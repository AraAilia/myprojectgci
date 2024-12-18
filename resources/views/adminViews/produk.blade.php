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

<h2 class="mb-4">Daftar Proyek Source Code</h2>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Penjual</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
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
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $produks->id }}">Edit</button>
                </td>
            </tr>

            <!-- Modal Edit User -->
            <div class="modal fade" id="editUserModal{{ $produks->id }}" tabindex="-1" aria-labelledby="editUserModalLabel{{ $produks->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editUserModalLabel{{ $produks->id }}">Edit Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editUserForm" action="#" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <!-- Nama (Readonly) -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama:</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $produks->penjual->nama }}" required readonly>
                                </div>
                            
                                <!-- Email (Readonly) -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $produks->penjual->email }}" required readonly>
                                </div>
                            
                                <!-- Role (Dropdown Select) -->
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role:</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="pembeli" {{ $produks->penjual->role == 'pembeli' ? 'selected' : '' }}>Pembeli</option>
                                        <option value="penjual" {{ $produks->penjual->role == 'penjual' ? 'selected' : '' }}>Penjual</option>
                                    </select>
                                </div>
                            
                                <!-- Tombol Simpan -->
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>

@endsection
