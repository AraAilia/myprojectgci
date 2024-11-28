@extends('adminViews.components.index')

@section('isi')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #c93030;
            padding: 8px;
        }
        th {
            background-color: #c93434;
            text-align: left;
        }
        tr:hover {
            background-color: #f5f1f1;
        }
    </style>

<h2>Daftar Proyek Source Code</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}">
                        <i class="bi bi-pencil-square"></i> 
                    </button>
                </td>
            </tr>
            <!-- Modal Edit User -->
            <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel{{ $user->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editUserModalLabel{{ $user->id }}">Edit Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editUserForm" action="{{ route('users-update',$user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <!-- Nama (Readonly) -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ $user->name }}" required readonly>
                                </div>
                            
                                <!-- Email (Readonly) -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ $user->email }}" required readonly>
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