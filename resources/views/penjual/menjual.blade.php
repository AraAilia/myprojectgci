<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARTCODE</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style_home.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Preload Banner -->
    <link rel="preload" href="./assets/images/hero-banner.png" as="image">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .btn-add {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .btn-add:hover {
            background-color: #218838;
        }

        .table-custom {
            width: 100%;
            border-collapse: collapse;
            /* margin: 20px; */
            table-layout: fixed;
            /* Menetapkan lebar kolom tetap */
        }

        .table-custom th,
        .table-custom td {
            padding: 10px;
            text-align: center;
            /* Lebih mudah dibaca untuk teks */
            /* vertical-align: middle; */
            border: 1px solid #ddd;
            word-wrap: break-word;
            /* Mengatur kata agar tidak keluar dari kolom */
            overflow: hidden;
            /* Menyembunyikan konten yang melebihi lebar kolom */
            text-overflow: ellipsis;
            /* Menggunakan elipsis untuk teks panjang */
            /* white-space: normal; */
            /* Agar teks panjang dibungkus dengan baik */
        }

        .table-custom thead th {
            background-color: #b60d0d;
            /* Warna latar header */
            color: #fff;
            /* Warna teks header */
        }

        .table-custom tbody tr:hover {
            background-color: #f2f2f2;
            /* Highlight saat hover */
        }

        /* Menambahkan garis batas untuk tabel */
        .table-custom th,
        .table-custom td {
            border: 1px solid #ddd;
        }

        /* Warna latar belakang header */
        .table-custom th {
            background-color: #b60d0d;
            color: white;
        }

        /* Warna baris ganjil dan genap */
        .table-custom tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

         .table-custom tbody tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-custom tbody tr:hover {
            background-color: #e8f5fe;
        } */

        /* Responsif */
        .table-responsive {
            overflow-x: auto;
            margin: 20px 0;
        }

        /* Gambar pada tabel */
        /* .table-custom img {
            width: 100px; */
            /* Menetapkan ukuran gambar */
            /* height: auto; */
            /* Pertahankan proporsi gambar */
            /* max-width: 100%; */
            /* Memastikan gambar tidak keluar dari kolom */
        /* } */

        /* Tombol Custom */
        .btn-custom {
            padding: 5px 10px;
            font-size: 0.875rem;
            border-radius: 4px;
        }

        /* Warna tombol */
        .btn-warning {
            background-color: #ffc107;
            color: #212529;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body id="top">
    <!-- Header -->
    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>

            <a href="#" class="logo">
                <img src="./assets/images/logomm.jpg" width="160" height="50" alt="Footcap logo">
            </a>

            <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar" data-navbar>
                <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                    <ion-icon name="close-outline"></ion-icon>
                </button>

                <a href="#" class="logo">
                    <img src="./assets/images/logo.svg" width="190" height="50" alt="Footcap logo">
                </a>

                <ul class="navbar-list">
                    <li class="navbar-item"><a href="penjual" class="navbar-link">Dashboard</a></li>
                    <li class="navbar-item"><a href="datadiri" class="navbar-link">Profil saya</a></li>
                    <li class="navbar-item"><a href="menjual" class="navbar-link">Upload</a></li>
                    <li class="navbar-item"><a href="ulasan" class="navbar-link">Ulasan</a></li>
                </ul>

                <ul class="nav-action-list">
                    <li>
                        <a href="#" class="nav-action-btn">
                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                            <span class="nav-action-text">Login / Register</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="content">
        <form action="{{ route('penjual.unggah') }}" method="GET" style="display:inline;">
            <button type="submit" class="btn-add">Tambah Data Baru</button>
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 20%;">Nama</th>
                        <th style="width: 20%;">Kategori</th>
                        <th style="width: 30%;">Deskripsi</th>
                        <th style="width: 10%;">Harga</th>
                        <th style="width: 15%;">Image</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody >
                    <!-- Looping untuk menampilkan produk -->
                    @foreach ($produk as $key => $item)
                        <tr class="table table-custom">
                            <td style="width: 5%;">{{ $key + 1 }}</td>
                            <td style="width: 20%;">{{ $item->nama }}</td>
                            <td style="width: 20%;">{{ $item->kategori_id }}</td>
                            <td style="width: 30%;">{{ $item->deskripsi }}</td>
                            <td style="width: 10%;">Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td style="width: 15%;">
                                <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->nama }}"
                                    width="80">
                            </td>
                            <td style="width: 15%;">
                              <!-- Tombol Edit -->
                              <a href="{{ route('penjual.edit', $item->id) }}" class="btn btn-warning btn-custom">Edit</a>
                              
                              <!-- Tombol Hapus -->
                              <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                              </form>
                          </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- <!-- Scripts -->
    <script>
        const navOpenBtn = document.querySelector('[data-nav-open-btn]');
        const navCloseBtn = document.querySelector('[data-nav-close-btn]');
        const navbar = document.querySelector('[data-navbar]');

        navOpenBtn.addEventListener('click', () => {
            navbar.setAttribute('data-navbar', 'open');
        });

        navCloseBtn.addEventListener('click', () => {
            navbar.setAttribute('data-navbar', 'close');
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html> --}}
