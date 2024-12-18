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

<div class="container mt-4">
    <h1 class="text-center mb-4">Data Pengguna</h1>

   


    <div class="">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
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
                    <button class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#acceptUserModal{{ $user->id }}">
                        <i class="bi bi-check-circle"></i> Terima
                    </button>
                    
                    <div class="modal fade" id="acceptUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="acceptUserModalLabel{{ $user->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="acceptUserModalLabel{{ $user->id }}">Konfirmasi Aksi Pengguna</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah kamu yakin ingin melakukan aksi terhadap pengguna dengan nama <strong>{{ $user->name }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <!-- Tombol Terima -->
                                    <form action="{{ url('/accept-user/'.$user->id) }}" method="POST">
                                     @csrf
                                     <button type="submit" class="btn btn-success">Ya, Terima</button>
                                    </form>

                    
                                    <!-- Tombol Tolak -->
                                    <form action="/reject-user/{{ $user->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                    </form>
                    
                                    <!-- Tombol Blokir -->
                                    <form action="/block-user/{{ $user->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Blokir</button>
                                    </form>
                    
                                    <!-- Tombol Batal -->
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    
                  

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

      
    
        <!-- Hubungkan File JavaScript -->
        <script src="script.js"></script>
    </tbody>
</table>


    
@endsection