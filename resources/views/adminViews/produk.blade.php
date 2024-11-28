@extends('adminViews.components.index')

@section('isi')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>

<h2>Daftar Proyek Source Code</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Penjual</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Image</th>
            <th>Price</th>
            
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
                <td>{{ $produks->image_path }}</td>
                <td>{{ $produks->harga }}</td>
                <td>
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
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ $produks->name }}" required readonly>
                                </div>
                            
                                <!-- Email (Readonly) -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ $produks->email }}" required readonly>
                                </div>
                            
                                <!-- Role (Dropdown Select) -->
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role:</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="pembeli">Pembeli</option>
                                        <option value="penjual">Penjual</option>
                                    </select>
                                </div>
                            
                                <!-- Tombol Simpan -->
                                <button type="submit"  class="btn btn-primary">Simpan</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
</table>


    
@endsection