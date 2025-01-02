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

<div class="">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Toko</th>
        <th>Nomor Telepon</th>
        <th>Bank</th>
        <th>No_Rekening</th>
        

    </tr>
</thead>
    <tbody>
        @if(!empty($penjual))
        @foreach ($penjual as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penjual->nama }}</td>
                <td>{{ $penjual->toko }}</td>
                <td>{{ $penjual->nomor_hp }}</td>
                <td>{{ $penjual->bank }}</td>
                <td>{{ $penjual->no_rekening}}</td>
                <td>
                    <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#editPenjualModal{{ $penjual->id }}">
                        <i class="bi bi-pencil-square"></i> 
                    </button>
                </td>
            </tr>
            <!-- Modal Edit User -->
            <div class="modal fade" id="editUserModal{{ $penjual->id }}" tabindex="-1" aria-labelledby="editUserModalLabel{{ $user->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPenjualModalLabel{{ $penjual->id }}">Edit Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editPenjualForm" action="{{ route('penjual-update',$penjual->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <!-- Nama (Readonly) -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ $penjual->name }}" required readonly>
                                </div>
                            
                                <!-- Email (Readonly) -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ $penjual->email }}" required readonly>
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
        @endif
        
    </tbody>
</table>
@endsection