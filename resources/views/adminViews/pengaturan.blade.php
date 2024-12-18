@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data User</h1>
    <hr>
    <div class="mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-primary"><i class='bx bx-book-add'></i> Tambah User</a>
    </div>

    <form method="GET" class="form-inline mb-3">
        <input class="form-control mr-2" type="search" name="cari" placeholder="Cari user" value="{{ request('cari') }}">
        <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>

    @if($users->count())
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <td>{{ $users->firstItem() + $index }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->level }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success"><i class='bx bx-edit'></i> Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class='bx bx-trash'></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    @else
        <p>Tidak ada data pengguna.</p>
    @endif
</div>
@endsection
