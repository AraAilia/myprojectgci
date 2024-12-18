@extends('adminViews.components.index')

@section('isi')
    <h1 class="mt-4">MARTCODE</h1>
    
    <div class="row">
        <div class="col-xl-3 col-md-6" style="margin-left: 50px;">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Pesanan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/total">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6" style="margin-left: 50px;">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Jumlah Pendapatan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6" style="margin-left: 50px;">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Data Pengguna</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5" style="margin-top: 100px;">
        <div class="col-xl-10"> <!-- Perlebar kolom dari 6 ke 10 -->
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body">
                    <!-- Perbesar canvas untuk chart -->
                    <canvas id="myBarChart" style="width: 100%; height: 400px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    
@endsection
