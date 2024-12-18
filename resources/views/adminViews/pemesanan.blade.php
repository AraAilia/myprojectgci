@extends('adminViews.components.index')

@section('isi')
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pemesanan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Nama Pembeli</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->product_name }}</td>
                    <td>{{ $order->buyer_name }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>
                        @if($order->status == 'pending')
                            <form action="{{ route('orders.confirm', $order->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Confirm Order</button>
                            </form>
                        @else
                            <span class="badge bg-success">Confirmed</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@endsection